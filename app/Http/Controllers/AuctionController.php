<?php namespace App\Http\Controllers;
use View;
use App\Auction;
use App\Artist;
use App\Color;
use App\Style;
use App\Bidder;
use App\Category;
use App\Era;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Input;
use File;
use Illuminate\Support\Facades\Redirect;
use Mail;


class AuctionController extends Controller {

  public function index()
  {
    $auctions = Auction::where('FK_user_id','=', Auth::user()->id)->with('artist')->get();
    $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();

    return View::make('my-auctions')
              ->with('auctions', $auctions)
              ->with('newestAuction', $newestAuction);
  }

  public function create()
  {
    $artists = ['default'=>'Choose an artist'] + Artist::orderby('name', 'ASC')->lists('name', 'id')->all(); 
    $eras = ['default'=>'Choose an era'] + Era::lists('name', 'id')->all();   
    $categories = ['default'=>'Choose a category'] + Category::orderby('name', 'ASC')->lists('name', 'id')->all();  
    $colors = ['default'=>'Choose a color'] + Color::orderby('colorEnglish', 'ASC')->lists('colorEnglish', 'id')->all();  
    $styles = ['default'=>'Choose a style'] + Style::orderby('name', 'ASC')->lists('name', 'id')->all();  
    $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();

    return View::make('create')
              ->with('artists', $artists)
              ->with('eras', $eras)
              ->with('categories', $categories)
              ->with('colors', $colors)
              ->with('styles', $styles)
              ->with('newestAuction', $newestAuction);

  }

  public function store(Request $request)
  {


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|alpha_dash',
            'width' => 'required|max:20',
            'year' => 'required|integer|max:2016',
            'height' => 'required|max:20',
            'depth' => 'required|max:20',
            'descriptionEnglish' => 'required|max:255',
            'descriptionDutch' => 'required|max:255',
            'conditionEnglish' => 'required|max:255',
            'conditionDutch' => 'required|max:255',
            'originEnglish' => 'required|max:255',
            'originDutch' => 'required|max:255',
            'conditionDutch' => 'required|max:255',
            'minPrice' => 'required|min:1|max:9999999999|integer',
            'maxPrice' => 'required|min:1|max:9999999999|integer',
            'buyoutPrice' => 'required|min:1|max:9999999999|integer',
            'enddate' => 'required|date',
            'artist' => 'required|not_in:0',
            'era' => 'required|not_in:0',
            'color' => 'required|not_in:0',
            'style' => 'required|not_in:0',
            'category' => 'required|not_in:0',
            'imageArtwork' => 'required',
            'imageSignature' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = $request->all();

        $auction = new Auction();
        $auction->FK_user_id = Auth::user()->id;
        $auction->title = $input['title'];
        $auction->width = $input['width'];
        $auction->year = $input['year'];
        $auction->height = $input['height'];
        $auction->depth = $input['depth'];
        $auction->descriptionEnglish = $input['descriptionEnglish'];
        $auction->descriptionDutch = $input['descriptionDutch'];
        $auction->conditionEnglish = $input['conditionEnglish'];
        $auction->conditionDutch = $input['conditionDutch'];
        $auction->originEnglish = $input['originEnglish'];
        $auction->originDutch = $input['originDutch'];
        $auction->minPrice = $input['minPrice'];
        $auction->currentPrice = $input['minPrice']; //de huidige prijs op de minimum prijs zetten
        $auction->maxPrice = $input['maxPrice'];
        $auction->buyoutPrice = $input['buyoutPrice'];
        $auction->enddate = $input['enddate'];
        $artist = explode(',', $input['artist']);
        $auction->FK_artist_id     = $artist[0];
        $era = explode(',', $input['era']);
        $auction->FK_era_id     = $era[0];
        $color = explode(',', $input['color']);
        $auction->FK_color_id     = $color[0];
        $style = explode(',', $input['style']);
        $auction->FK_style_id     = $style[0];
        $category = explode(',', $input['category']);
        $auction->FK_category_id     = $category[0];
        $auction->FK_status_id = '1'; //pending

        $directory = public_path().'/images/uploads/'.Auth::user()->email.'/';
        File::makeDirectory($directory, 0777, true,true);

        $file = array('image' => $input['imageArtwork']);

        if (isset($file['image'])) 
        {
            $img_rule = array('imageArtwork' => 'image');
            $img_validator = Validator::make($file, $img_rule);

            if ($img_validator->fails()) 
            {
                return Redirect::route('createAuction')
                                ->withErrors($img_validator);
            }
            else
            {
               $extension = null;
               $extension = $input['imageArtwork']->getClientOriginalExtension();

               $filename = "Artwork_".$input['title'].".".$extension;

               Input::file('imageArtwork')->move($directory, $filename);

               $auction->imageArtwork  = $directory.$filename;
            }
        }

        $file = array('image' => $input['imageSignature']);

        if (isset($file['image'])) 
        {
            $img_rule = array('imageSignature' => 'image');
            $img_validator = Validator::make($file, $img_rule);

            if ($img_validator->fails()) 
            {
                return Redirect::route('createAuction')
                                ->withErrors($img_validator);
            }
            else
            {
               $extension = null;
               $extension = $input['imageSignature']->getClientOriginalExtension();

               $filename = "Signature_".$input['title'].".".$extension;

               Input::file('imageSignature')->move($directory, $filename);

               $auction->imageSignature = $directory.$filename;
            }
        }

        if(Input::file('file_url') != null)
        {
              $file = array('image' => $input['imageOptional']);

              if (isset($file['image'])) 
              {
                  $img_rule = array('imageOptional' => 'image');
                  $img_validator = Validator::make($file, $img_rule);

                  if ($img_validator->fails()) 
                  {
                      return Redirect::route('createAuction')
                                      ->withErrors($img_validator);
                  }
                  else
                  {
                     $extension = null;
                     $extension = $input['imageOptional']->getClientOriginalExtension();

                     $filename = "Optional_".$input['title'].".".$extension;

                     Input::file('imageOptional')->move($directory, $filename);

                     $auction->imageOptional = $directory.$filename;
                  }
              }
        }

        $auction->save();
        return Redirect::route('createAuction')->with('success','Auction succesfully added!');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function showdetails($id)
  {
    $auction = Auction::with('artist')->with('color')->with('style')->with('category')->with('bidders')->findOrFail($id);

    $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();

    return View::make('details')
                  ->with('auction', $auction)
                  ->with('newestAuction', $newestAuction);
  }



  public function placeBid($id, Request $request)
  {
      $highestbid = Bidder::where('FK_auction_id', '=', $id)->orderBy('bidAmount', 'desc')->first();

      $validator = Validator::make($request->all(), [
          'bidAmount' => 'required|max:9999999|integer'
      ]);

      if ($validator->fails()) 
      {
          return redirect()->back()
                      ->withErrors($validator)
                      ->withInput();
      }

      $input = $request->all();

      $auction = Auction::find($id);

      if($input['bidAmount'] >= $auction->minPrice && $input['bidAmount'] <= $auction->maxPrice) //tussen de min en max prijs
      {
        if($highestbid == null) // is er een highest bid
        {
          $bidder = new Bidder();
          $bidder->FK_user_id = Auth::user()->id;
          $bidder->FK_auction_id = $id;
          $bidder->bidAmount = $input['bidAmount'];
          $bidder->save();

          $auction->currentPrice = $input['bidAmount'];
          $auction->FK_status_id = '3'; //active
          $auction->save();

          $success = 'You have succesfully placed &euro;'.$input['bidAmount'].' on this auction!';

          return redirect()->back()->with('success', $success);
        }
        else
        {
          if($input['bidAmount'] > $highestbid->bidAmount) //checken of groter dan huidig bod
          {
            $bidder = new Bidder();
            $bidder->FK_user_id = Auth::user()->id;
            $bidder->FK_auction_id = $id;
            $bidder->bidAmount = $input['bidAmount'];
            $bidder->save();

            $auction->currentPrice = $input['bidAmount'];
            $auction->save();

            $success = 'You have succesfully placed &euro;'.$input['bidAmount'].' on this auction!';

            return redirect()->back()->with('success', $success);
          }
          else
          {
            $warning = 'The current offer is &euro;'.$highestbid->bidAmount.' place a higher value to bid.';
            return redirect()->back()->with('warning', $warning);
          }
        }
      }
      else{

          $warning = 'The minimum price is &euro; '.$auction->minPrice.' and the maximum price is &euro; '.$auction->maxPrice.'.';
          return redirect()->back()->with('warning', $warning);
      }

  }

  public function buyout($id)
  {
    $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();
    $auction = Auction::find($id);
    $lostbidders = Bidder::where('FK_auction_id', '=', $auction->id)->distinct()->with('user')->get(); //distinct voor duplicate receivers

    if(Auth::user()->id == $auction->FK_user_id) //eigen item 
    {
       $warning = 'This is your own item!';
       return redirect()->back()->with('warning', $warning);
    }
    
            
          $auction->FK_status_id = '5'; //sold
          $auction->save();

    //mail sturen naar andere bieders
    foreach($lostbidders as $bidder)
    {
      if($bidder->FK_user_id != Auth::user()->id) //geen mail naar je eigen sturen wanneer je zelf de buyout doet 
      {
        //mail sturen naar verliezende bidders
        Mail::send('email.lostauction',
            array(
                'descriptionEnglish' => $auction->descriptionEnglish,
                'descriptionDutch' => $auction->descriptionDutch,
                'title' => $auction->title
            ), function($message)
        {
            $message->from('jim.peeters@student.kdg.be');
            $message->to($bidder->user->email, 'Admin')->subject('You have lost an auction on Landoretti');
        });

        
      }
    }

    return View::make('buynow')
              ->with('newestAuction', $newestAuction);
  }


  
}

?>