<?php namespace App\Http\Controllers;
use View;
use App\Auction;
use App\Artist;
use App\Color;
use App\Style;
use App\Category;
use App\Era;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Input;
use File;
use Illuminate\Support\Facades\Redirect;


class AuctionController extends Controller {

  public function index()
  {
    $auctions = Auction::where('FK_user_id','=', Auth::user()->id)->with('artist')->get(); 

    return View::make('my-auctions')
              ->with('auctions', $auctions);
  }

  public function create()
  {
    $artists = ['default'=>'Choose an artist'] + Artist::orderby('name', 'ASC')->lists('name', 'id')->all(); 
    $eras = ['default'=>'Choose an era'] + Era::lists('name', 'id')->all();   
    $categories = ['default'=>'Choose a category'] + Category::orderby('name', 'ASC')->lists('name', 'id')->all();  
    $colors = ['default'=>'Choose a color'] + Color::orderby('colorEnglish', 'ASC')->lists('colorEnglish', 'id')->all();  
    $styles = ['default'=>'Choose a style'] + Style::orderby('name', 'ASC')->lists('name', 'id')->all();  

    return View::make('create')
              ->with('artists', $artists)
              ->with('eras', $eras)
              ->with('categories', $categories)
              ->with('colors', $colors)
              ->with('styles', $styles);

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
                        ->withInput()
                        ->with('registerFail', ['fail']);
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
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>