@extends('frontEnd.layout.master')
@section('page-Title')
    home page
@endsection

@section('cssCode')
@endsection

@section('jsCode')
@endsection

@section('content')
    <div class="body2">
        <div class="main">
            <section id="content">
                <div class="wrapper">
                    <article class="col1">
                        <div id="slider"> <img src="images/img1.jpg" alt="" title="<strong>Villa Neverland, 2006</strong><span>9 rooms, 3 baths, 6 beds, building size: 5000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 600 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="images/img2.jpg" alt="" title="<strong>Villa Lipsum, 2008</strong><span>8 rooms, 4 baths, 4 beds, building size: 4500 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 500 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="images/img3.jpg" alt="" title="<strong>Villa Dolor Sid, 2007</strong><span>11 rooms, 3 baths, 5 beds, building size: 6000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 650 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="images/img4.jpg" alt="" title="<strong>Villa Nemo Enim, 2010</strong><span>5 rooms, 2 baths, 4 beds, building size: 3000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 400 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> <img src="images/img5.jpg" alt="" title="<strong>Villa Nam Libero, 2003</strong><span>7 rooms, 4 baths, 6 beds, building size: 7000 sq. ft. &nbsp; &nbsp; &nbsp; Price: $ 700 000 &nbsp; &nbsp; &nbsp; <a href='#'>Read more</a></span>"> </div>
                    </article>
                    <article class="col2">
                        <form id="form_1" action="#" method="post">
                            <div class="pad1">
                                <h3>Find Your Property</h3>
                                <div class="row"> City &amp; State, or Zip:<br>
                                    <input type="text" class="input">
                                </div>
                                <div class="row_select"> Search Area:<br>
                                    <select>
                                        <option>&nbsp;</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="row_select">
                                    <div class="cols"> Price Range:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> to:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row_select">
                                    <div class="cols"> Bedroom(s):<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> Bathroom(s):<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row_select pad_bot1">
                                    <div class="cols"> Radius:<br>
                                        <select>
                                            <option>&nbsp;</option>
                                            <option>...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="cols pad_left1"> <a href="#" class="button">Proposals</a> </div>
                                </div>
                                Know exactly what you want? <br>
                                Try our <a href="#">Advanced Search</a> </div>
                        </form>
                    </article>
                </div>
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad_left1">
                            <h2 class="pad_bot1">Buyers. Sellers. Proprietors. Agents.</h2>
                            <div class="wrapper">
                                <article class="cols">
                                    <h4 class="img1">Selling</h4>
                                    <p class="pad_bot1"><strong class="color1">Welcome one of <br>
                                            free website templates</strong></p>
                                    <p class="pad_bot2"> created by TemplateMonster.com team, optimized for 1024X768 px.</p>
                                    <a href="#" class="button">Read more</a> </article>
                                <article class="cols pad_left1">
                                    <h4 class="img2">Investing</h4>
                                    <p class="pad_bot1"><strong class="color1">Free website template for<br>
                                            Real Estate business</strong></p>
                                    <p class="pad_bot2"> goes with PSD source files and without them.</p>
                                    <a href="#" class="button">Read more</a> </article>
                                <article class="cols pad_left1">
                                    <h4 class="img3">Renting</h4>
                                    <p class="pad_bot1"><strong class="color1">Template has several pages</strong></p>
                                    <p class="pad_bot2"> <a href="index.html" class="color2">Main</a>, <a href="buying.html" class="color2">Buying</a>, <a href="selling.html" class="color2">Selling</a>, <a href="renting.html" class="color2">Renting</a>, <a href="finance.html" class="color2">Finance</a>, <a href="contacts.html" class="color2">Contacts</a> (note that contact us form – doesn’t work).</p>
                                    <a href="#" class="button">Read more</a> </article>
                            </div>
                        </div>
                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Special Offers</h3>
                            <ul class="list1">
                                <li><a href="#">Home Loan Offer</a></li>
                                <li><a href="#">Free Calculators</a></li>
                                <li><a href="#">Free Loan Tools</a></li>
                                <li><a href="#">Value Your Home</a></li>
                                <li><a href="#">Recently Sold Properties</a></li>
                                <li><a href="#">Suburb Statistics</a></li>
                                <li><a href="#">Compare Property Prices</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <div class="body3">
        <div class="main">
            <section id="content2">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2>Remodeling Rooms</h2>
                            <div class="wrapper pad_bot3">
                                <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
                                <p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
                                        Price: <span class="color1">$ 600 000</span></strong></p>
                                <p class="pad_bot2"> Massa dictum ementum velitumo od consequat ante oremsumas ame consectetueraipiscing eliteli ueedlorAliquam conguen nisauris accusalla vel deinol tincidunt ligula magna semper ipsum.</p>
                                <a href="#" class="button">Read more</a> </div>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page1_img5.jpg" alt=""></figure>
                                <p class="pad_bot1"><strong class="color2">2006, 3 baths, 6 beds, building size: 5000 sq. ft.<br>
                                        Price: <span class="color1">$ 600 000</span></strong></p>
                                <p class="pad_bot2"> Massa dictum ementum velitumo od consequat ante oremsumas ame consectetueraipiscing eliteli ueedlorAliquam conguen nisauris accusalla vel deinol tincidunt ligula magna semper ipsum.</p>
                                <a href="#" class="button">Read more</a> </div>
                        </div>
                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Recent News</h3>
                            <div class="wrapper"> <span class="date"><strong>28</strong><span>may</span></span>
                                <p><a href="#" class="color2">Donec consequat risus</a><br>
                                    Hendrerit conghdim entum diam metus fringilla nisl, in porta sapien purus quis odiosem... <a href="#">more</a></p>
                            </div>
                            <div class="wrapper"> <span class="date"><strong>25</strong><span>may</span></span>
                                <p><a href="#" class="color2">Nullam dignissim</a><br>
                                    Laoreet neque, quis sollicitudin orci tempus etiam viverra leo euismod pulvinar accumsan... <a href="#">more</a></p>
                            </div>
                            <div class="wrapper"> <span class="date"><strong>22</strong><span>may</span></span>
                                <p><a href="#" class="color2">Quisque nunc lorem</a><br>
                                    Feugiat nec sodales quis, iaculis sed libero. Cras vel nisl justo, ac posuere est nulla facilisi... <a href="#">more</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
@endsection
