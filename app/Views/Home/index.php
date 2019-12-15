<header>
<?php require_once ('Controllers/UserSessionController.php');
//$userSession = new UserSessionController();
if($_SESSION['user'] == 'gabrielmurillo547@gmail.com'){
    require_once('Views/Layouts/menu.php');
    //echo " es admin";
}
else if ($_SESSION['user'] != 'gabrielmurillo547@gmail.com'){
    require_once('Views/Layouts/menuUser.php');
    //echo " no es admin";
}
?>
</header>

<div class="alert alert-primary mt-3" role="alert" style="margin-left: 20%; margin-right: 20%; text-align: center;">
    Bienvenidos al Sistema de Gestión de la Secretaría Administrativa de la FISC
</div>

        <div style="margin-right: 10%; margin-left: 10%; margin-top: 5%;" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://www.utp.ac.pa/memoria/memoria2009/img/desarrollo1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Facultad de Ingeniería en Sistemas Computacionales</h5>
                  <p>Edificio 3. Campus Dr. Victor Levi Sasso</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://faf.sifisc-utp.org/wp-content/uploads/2019/10/11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>FISC Academy Fest</h5>
                  <p>Participacion de los estudiantes en el FISC Academy Fest.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="http://www.utp.ac.pa/sites/default/files/App_Gnabere6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Aplicación orientada al lenguaje Ngobe</h5>
                  <p>estudiantes desarrollan aplicación.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <div style="margin: 10%;" class="row">
            <div class="col-md-3">
                <a class="btn btn-outline-success" href="http://www.utp.ac.pa" role="button" target="_blank">Página Web</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-success" href="http://matricula.utp.ac.pa/" role="button" target="_blank">Matricula</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-success" href="http://ecampus.utp.ac.pa" role="button" target="_blank">ECampus</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-outline-success" href="http://campusvirtual.utp.ac.pa" role="button" target="_blank">Campus Virtual</a>
            </div>
        </div>
        <hr>
    
        <div>
            <div id="main-bottom" class="clearfix">
                <div class="main-bottom-inner">  
                    <div class="region region-main-bottom row">
                        <div id="block-utp-social-twitter" class="block block-utp-social bloque-social tw first odd col-md-4 ">
                            <h2 style="text-align: center;" class="block__title block-title"><a href="https://twitter.com/utppanama" class="block-title-link" title="UTP en Twitter" target="_blank">@utppanama</a></h2>    
                            <div style="margin: 2%;" class="content shadow p-3 mb-5 bg-white rounded">
                                <div class="utp-social-item tw clearfix"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-timeline twitter-timeline-rendered" style="position: static; visibility: visible; display: inline-block; width: 520px; height: 600px; padding: 0px; border: none; max-width: 100%; min-width: 180px; margin-top: 0px; margin-bottom: 0px; min-height: 200px;" data-widget-id="profile:utppanama" title="Cronología de Twitter"></iframe>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                </div> 
                            </div>
                        </div>

                        <div id="block-utp-social-facebook" class="block block-utp-social bloque-social fb even col-md-4">
                            <h2 style="text-align: center;" class="block__title block-title"><a href="https://www.facebook.com/paginautp" class="block-title-link" title="UTP en Facebook" target="_blank">UTP en Facebook</a></h2>    
                            <div style="margin: 2%;" class="content shadow p-3 mb-5 bg-white rounded">
                                <div class="utp-social-item fb clearfix">
                                    <div id="fb-root" class=" fb_reset">
                                        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                            <div>
                                                <iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f6bf5472ebc64&amp;origin=http%3A%2F%2Fwww.utp.ac.pa" style="border: none;"></iframe>
                                            </div>
                                        </div>  
                                    </div>
                                    <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>
                                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/paginautp" data-width="400" data-height="433" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=259&amp;height=433&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpaginautp&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=false&amp;show_posts=true&amp;small_header=false&amp;width=400">
                                        <span style="vertical-align: bottom; width: 259px; height: 433px;">
                                        <iframe name="f37a5994a03a7d" width="400px" height="433px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df3f9ef64278bf1c%26domain%3Dwww.utp.ac.pa%26origin%3Dhttp%253A%252F%252Fwww.utp.ac.pa%252Ff6bf5472ebc64%26relation%3Dparent.parent&amp;container_width=259&amp;height=433&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpaginautp&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=false&amp;show_posts=true&amp;small_header=false&amp;width=400" style="border: none; visibility: visible; width: 259px; height: 433px;" class=""></iframe></span>
                                    </div>
                                </div>  
                            </div>
                        </div>

                        <div id="block-utp-social-youtube" class="block block-utp-social bloque-social yt last odd col-md-4">
                            <h2 style="text-align: center;" class="block__title block-title"><a href="https://www.youtube.com/user/UTPPanama" class="block-title-link" title="UTP en Youtube" target="_blank">UTP en Youtube</a></h2>    
                            <div style="margin: 2%;" class="content shadow p-3 mb-5 bg-white rounded">
                                <div class="utp-social-item yt clearfix">
                                    <div class="utp-social-youtube">
                                        <div class="player">
                                            <iframe title="Foro Retos Universitarios Frente a las Reformas Constitucionales" src="http://www.youtube.com/embed/3WIA2k5zStU?rel=0"></iframe>
                                        </div>
                                        <div class="lista">
                                            <div class="thumbnail" data-id="3WIA2k5zStU">
                                                <div class="thumbnail-inner">
                                                    <img class="imagen" width="320" height="90" src="https://i.ytimg.com/vi/3WIA2k5zStU/mqdefault.jpg" alt="Foro Retos Universitarios Frente a las Reformas Constitucionales"><span class="titulo">
                                                    <span class="nombre">Foro Retos Universitarios Frente a las Reformas Constitucionales</span> (04:42)</span>
                                                </div>
                                            </div>
                                            <div class="thumbnail" data-id="T0t6nAjdajg">
                                                <div class="thumbnail-inner"><img class="imagen" width="320" height="90" src="https://i.ytimg.com/vi/T0t6nAjdajg/mqdefault.jpg" alt="Estatuilla Premio Cuásar">
                                                    <span class="titulo">
                                                    <span class="nombre">Estatuilla Premio Cuásar</span> (01:52)</span>
                                                </div>
                                            </div>
                                            <div class="thumbnail" data-id="ifCN8_2AKaA">
                                                <div class="thumbnail-inner"><img class="imagen" width="320" height="90" src="https://i.ytimg.com/vi/ifCN8_2AKaA/mqdefault.jpg" alt="UTP Conmemora 116 años de Vida Republicana">
                                                    <span class="titulo"><span class="nombre">UTP Conmemora 116 años de Vida Republicana</span> (03:37)</span>
                                                </div>
                                            </div>
                                            <div class="thumbnail" data-id="t_MXzwDRTSU">
                                                <div class="thumbnail-inner">
                                                    <img class="imagen" width="320" height="90" src="https://i.ytimg.com/vi/t_MXzwDRTSU/mqdefault.jpg" alt="Ceremonia de Graduación Promoción 2019 de la Facultad de Ingeniería Industrial"><span class="titulo"><span class="nombre">Ceremonia de Graduación Promoción 2019 de la Facultad de Ingeniería Industrial</span> (79:27)</span>
                                                </div>
                                            </div>
                                            <div class="spinner-holder">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                            <a id="yt-ver-mas" href="#" data-page="CAQQAA">Ver más...</a>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
</div>
