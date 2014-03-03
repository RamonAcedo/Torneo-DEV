@extends('layouts.master') 

@section('preview')
<!-- NEWS PREVIEW + TEAMS -->
<div class="row">
    <!-- CAROUSEL -->
    <div class="col-xs-6 col-sm-6 col-md-2 team-one">
        <div class="team-wrap">
            <div class="bars"></div>
            <div class="equipo">
                EQUIPOS - I
            </div>
            <script>
                $(document).ready(function(){ 
                						$("#myTable2").tablesorter(); 
                					});
            </script>
            <table id="myTable2" class="table table-condensed table-teams sortable">
                <thead>
                    <tr>
                        <th class="header">Nombre</th>
                        <th>G</th>
                        <th colspan="3">P</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Equipo 1</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 2</td>
                        <td>13</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 3</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 4</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 5</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 6</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 7</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 8</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>

                </tbody>
            </table>
            <div class="bars"></div>
        </div>
    </div>
    <div class="col hidden-xs hidden-sm col-md-8 toppie">
        <!-- Carousel
                ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/img01.jpg" alt="First slide">

                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a
                                <code>file://</code>URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        </div>
                </div>
                <div class="item">
                    <img src="images/img02.jpg" alt="Second Slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img03.jpg" alt="third Slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!-- /.carousel -->
    </div>
    <div class="col-xs-6 col-sm-6 col-md-2 team-one">
        <div class="team-wrap">
            <div class="bars"></div>
            <div class="equipo">
                EQUIPOS - II
            </div>
            <script>
                $(document).ready(function(){ 
                				$("#myTable1").tablesorter(); 
                			});
            </script>
            <table id="myTable1" class="table table-condensed table-teams sortable">
                <thead>
                    <tr>
                        <th class="header">Nombre</th>
                        <th>G</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Equipo 9</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 10</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 11</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 12</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 13</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 14</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 15</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Equipo 16</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
            <div class="bars"></div>
        </div>
    </div>
    <!-- end of the section -->
</div>
<!-- END -->
@stop 

@section('content')
<!-- MAIN CONTENT +  SIDEBAR -->
<div class="row">
    <!--  MAIN CONTENT -->
    <div id="content" class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <h1>Noticias</h1>
        <hr>
        @foreach($noticias as $noticia)
        <div class="row">
            <div class="post-new">
                <div class="col col-xs-12 col-sm-3 col-md-3 post-prev">
                    <img src="{{ $noticia->img_preview }}" alt="">
                </div>
                <div class="col col-xs-12 col-sm-9 col-md-9 post-content">
                    <div class="post-header">
                        <h3 class="post-title">{{ $noticia->title }}</h3>
                        <p class="label label-default">Publicador por: Administrador | El {{ date("d F Y",strtotime($noticia->created_at)) }}</p>
                        <div class="date"></div>
                        <p>{{ $noticia->content }}
                        </p>
                        <a class="show-more" href="">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
        <hr style="float: left; border: 1px solid #d9d9d9; width: 100%; margin-top: 0px;">
        @endforeach


        <!-- PAGER -->
        <div class="row">
            <div class="container">
                {{ $noticias->links() }}
                <br>
            </div>
        </div>
        <!-- End of the section -->
    </div>
    <!-- end of section -->
    @stop @section('sidebar')

    <!-- SIDEBAR -->
    <div class="col hidden-xs hidden-sm col-md-3 col-lg-3 sidebar">
        <div class="social">
            <h3>Siguenos</h3>
            <img src="images/social/facebook-48.png" alt="">
            <img src="images/social/twitter-48.png" alt="">
            <img src="images/social/youtube-48.png" alt="">
        </div>
        <div class="news">
            <h3>Actividad reciente</h3>
            <ul>
                @foreach($recientes as $reciente)
                    <li>
                        <a href="">{{ $reciente->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="adds">
            <h3>publicidad</h3>
            <img class="publicidad" alt="">
        </div>
        <hr>
        <div class="adds">
            <h3>publicidad</h3>
            <img class="publicidad" alt="">
        </div>

    </div>
    <!-- end of the section -->

</div>
<!-- END -->
@stop 
