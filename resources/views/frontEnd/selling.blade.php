@extends('frontEnd.layout.master')
@section('page-Title')
    selling page
@endsection
@section('content')
    <!-- content -->
    <div class="body2">
        <div class="main">
            <section id="content">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2 class="pad_bot1 pad_top1">Home Value Estimator</h2>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page3_img1.jpg" alt=""></figure>
                                <p class="pad_bot1 color2">Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur ante at arcu mollis aliquam.</p>
                                <p>Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu. Nullam a velit felis, eget luctus elit.</p>
                            </div>
                            <p>Nulla augue lorem, sodales et pharetra et, porttitor vel leo. Phasellus at mi nec sem sodales egestas et vitae enim. Praesent interdum, nulla at suscipit rhoncus, lacus ligula tristique enim, vitae suscipit quam leo non leo. Donec in metus libero, quis faucibus purus. Duis sit amet risus eros. In hac habitasse platea dictumst. Donec tellus tellus, sodales pellentesque ullamcorper euismod neque.</p>
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
                            <h2 class="pad_bot1">Mortgage Center</h2>
                            <p class="color2">Nam in dolor eget dolor ultricies dapibus non nec nisl. Nunc interdum convallis est in dictum. Mauris elementum dapibus tortor, et posuere libero vulputate quis. Nam imperdiet, mi in mollis adipiscing, leo massa tincidunt augue, id semper nunc nulla in neque egestas neque ut risus venenatis eget aliquet.</p>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page3_img2.jpg" alt=""></figure>
                                <p>Integer dui leo, dignissim ut interdum ac, ultricies a risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus<br>
                                    mus. Curabitur dignissim nunc sit amet odio pharetra hendrerit. Nulla<br>
                                    justo ante, posuere sed hendrerit et, lacinia ultricies ligula. Integer ac<br>
                                    lacus vel massa venenatis suscipit in vel nulla. Donec quis placerat erat. Nam id lectus at lacus ullamcorper viverra. Mauris lacinia rutrum purus<br>
                                    quis pretium.</p>
                            </div>
                            <p>Pellentesque in tortor quam. Quisque et risus dolor, in consequat nunc. Vivamus sagittis consectetur nisi eget luctus. Maecenas pellentesque placerat dui in iaculis. Aenean sit amet felis risus.</p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Find Sales</h3>
                            <p><strong>Vestibulum imperdiet ante sit amet tortor pellentesque volutpat. Phasellus lobortis mauris id ligula convallis non imperdiet magna adipiscing. In odio ante, accumsan id convallis ac arcu. </strong></p>
                            <p>Sed dapibus mi sit amet justo faucibus nec porttitor magna feugiat. Sed vulputate consequat bibendum. Curabitur mollis posuere lectus, quis mattis libero dictum vitae. Curabitur sollicitudin, purus in fringilla lobortis, lacus nulla faucibus ipsum, porta.</p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!-- / content -->
@endsection


