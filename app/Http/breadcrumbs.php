<?php

// Home
Breadcrumbs::register('Home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});


// Home > FAQ
Breadcrumbs::register('FAQ', function($breadcrumbs)
{
    $breadcrumbs->parent('Home');
    $breadcrumbs->push('FAQ', route('faq'));
});

// Home > Profile
Breadcrumbs::register('myProfile', function($breadcrumbs)
{
    $breadcrumbs->parent('Home');
    $breadcrumbs->push('My Profile', route('myProfile'));
});

// Home > Profile > myAuctions
Breadcrumbs::register('myAuctions', function($breadcrumbs)
{
    $breadcrumbs->parent('myProfile');
    $breadcrumbs->push('My auctions', route('myAuctions'));
});

// Home > Profile > myBids
Breadcrumbs::register('myBids', function($breadcrumbs)
{
    $breadcrumbs->parent('myProfile');
    $breadcrumbs->push('My bids', route('myBids'));
});

// Home > Profile > myAuctions > New auction
Breadcrumbs::register('addAuction', function($breadcrumbs)
{
    $breadcrumbs->parent('myAuctions');
    $breadcrumbs->push('New Auction', route('myAuctions'));
});






/*
// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});
*/