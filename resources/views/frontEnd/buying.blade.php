@extends('frontEnd.layout.master')
@section('page-Title')
    Buying page
@endsection
@section('content')
    <!-- content -->
    <div class="body2">
        <div class="main">
            <section id="content">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2 class="pad_bot1 pad_top1">About Buying</h2>
                            <p class="pad_bot1 color2">Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur ante at arcu mollis aliquam.</p>
                            <p class="pad_bot2">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc.</p>
                        </div>
                        <div class="pad_left1">
                            <div class="wrapper pad_bot3">
                                <article class="cols">
                                    <ul class="list2">
                                        <li><a href="#">Maecenas mattis venenatis</a></li>
                                        <li><a href="#">Nam accumsan miac</a></li>
                                        <li><a href="#">Rhoncus luctus erat nisl</a></li>
                                        <li><a href="#">Ultrices neque, vel placerat</a></li>
                                        <li><a href="#">Morbi ut augue ut risus</a></li>
                                    </ul>
                                </article>
                                <article class="cols pad_left1">
                                    <ul class="list2">
                                        <li><a href="#">Quisque eget erat eget</a></li>
                                        <li><a href="#">Laoreet pharetra eget sed</a></li>
                                        <li><a href="#">Vestibulum scelerisque</a></li>
                                        <li><a href="#">Integerros massa viverra quis</a></li>
                                        <li><a href="#">Pharetra ultrices mauris </a></li>
                                    </ul>
                                </article>
                                <article class="cols pad_left1">
                                    <ul class="list2">
                                        <li><a href="#">Phasellus purus sapien</a></li>
                                        <li><a href="#">Adipiscing et tempus eget</a></li>
                                        <li><a href="#">Faucibus vel leo pellentesque</a></li>
                                        <li><a href="#">Ullamcorper ac dignissim</a></li>
                                        <li><a href="#">Malesuada eget augue</a></li>
                                    </ul>
                                </article>
                            </div>
                            <a href="#" class="button">Read more</a> </div>
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
                                Know exactly what you want?<br>
                                Try our <a href="#">Advanced Search</a> </div>
                        </form>
                    </article>
                </div>
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2 class="pad_bot1">Buying Guide</h2>
                            <p>Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur ante at arcu mollis aliquam. Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc.</p>
                            <div class="wrapper pad_bot3">
                                <figure class="left marg_right1"><a href="#"><img src="images/page2_img1.jpg" alt=""></a></figure>
                                <figure class="left marg_right1"><a href="#"><img src="images/page2_img2.jpg" alt=""></a></figure>
                                <figure class="left marg_right1"><a href="#"><img src="images/page2_img3.jpg" alt=""></a></figure>
                                <figure class="left marg_right1"><a href="#"><img src="images/page2_img4.jpg" alt=""></a></figure>
                                <figure class="left"><a href="#"><img src="images/page2_img5.jpg" alt=""></a></figure>
                            </div>
                            <p>Vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu. Nullam a velit felis, eget luctus elit. Nulla augue lorem, sodales et pharetra et, porttitor vel leo. </p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Best Offers</h3>
                            <p class="pad_bot1"><a href="#">Cras non ultrices nibh. In quis semper urna enean sed pretium libero</a></p>
                            <p>Nunc id dolor mi, pellentesque mattis sem. Aenean non neque augue. Fusce scelerisque ligula et nibh convallis scelerisque. Donec a libero turpis, ac eleifend diam. Nulla at magna nibh, eu elementum orci. In placerat varius nulla, in congue dolor interdum id. Mauris consequat, est non feugiat malesuada ante odio.</p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!-- / content -->
@endsection
