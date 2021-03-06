@extends('frontEnd.layout.master')
@section('page-Title')
    Finance page
@endsection
@section('content')
    <!-- content -->
    <div class="body2">
        <div class="main">
            <section id="content">
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2 class="pad_bot1 pad_top1">About Financing</h2>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page5_img1.jpg" alt=""></figure>
                                <p class="pad_bot1 color2">Nam in dolor eget dolor ultricies dapibus non nec nisl. Nunc interdum convallis est in dictum.</p>
                                <p>Mauris elementum dapibus tortor, et posuere libero vulputate quis. Nam imperdiet, mi in mollis adipiscing, leo massa tincidunt augue, id semper nunc nulla in neque. Ut egestas neque ut risus venenatis eget aliquet sem molestie. Integer dui leo, dignissim ut interdum cum sociis natoque penatibus et magnis dis parturient montes.</p>
                            </div>
                            <p>Curabitur dignissim nunc sit amet odio pharetra hendrerit. Nulla justo ante, posuere sed hendrerit et, lacinia ultricies ligula. Integer ac lacus vel massa venenatis suscipit in vel nulla. Donec quis placerat erat. Nam id lectus at lacus ullamcorper viverra. Mauris lacinia rutrum purus quis pretium. Pellentesque in tortor quam. Quisque et risus dolor, in consequat nunc. Vivamus sagittis consectetur nisi eget luctus.</p>
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
                                Know exactly what you want? <br>
                                Try our <a href="#">Advanced Search</a> </div>
                        </form>
                    </article>
                </div>
                <div class="wrapper">
                    <article class="col1">
                        <div class="pad2">
                            <h2 class="pad_bot1">Financing Center</h2>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page5_img2.jpg" alt=""></figure>
                                <p>Integer dui leo, dignissim ut interdum ac, ultricies a risus. Cum sociis<br>
                                    natoque penatibus et magnis dis parturient montes, nascetur ridiculus<br>
                                    mus. Curabitur dignissim nunc sit amet odio pharetra hendrerit. Nulla <br>
                                    justo ante, posuere sed hendrerit et, lacinia ultricies ligula. Integer ac <br>
                                    lacus vel massa venenatis suscipit in vel nulla. Donec quis placerat erat. Nam id lectus at lacus ullamcorper viverra. Mauris lacinia rutrum purus <br>
                                    quis pretium.</p>
                            </div>
                            <p>Pellentesque in tortor quam. Quisque et risus dolor, in consequat nunc. Vivamus sagittis consectetur nisi eget luctus. Maecenas pellentesque placerat dui in iaculis. Aenean sit amet felis risus. Morbi vel nisl eget purus dignissim sodales sit amet ut quam. Sed rutrum molestie cursus. Nam mattis pellentesque leo quis tempus. Aenean risus tortor, porttitor a feugiat id, facilisis auctor felis. Morbi fringilla, dui sed pulvinar pharetra, nisi quam luctus nisi, non rutrum lorem arcu sit amet neque.</p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                    <article class="col2">
                        <div class="pad1">
                            <h3>Did You Know?</h3>
                            <p><strong>Vestibulum imperdiet ante sit amet tortor pellentesque volutpat. </strong></p>
                            <p>Sed dapibus mi sit amet justo faucibus nec porttitor magna feugiat. Sed vulputate consequat bibendum. Curabitur mollis posuere lectus, quis mattis libero dictum vitae. Curabitur sollicitudin, purus in fringilla lobortis, lacus nulla faucibus ipsum, porta.<br>
                                congue lorem nibh ac lectus. Nunc interdum pulvinar semid metus lacus, in eleifend metus.</p>
                            <a href="#" class="button">Read more</a> </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
    <!-- / content -->
@endsection
