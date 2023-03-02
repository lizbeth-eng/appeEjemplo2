<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>{{ config('app.name', 'Laravel') }}</h3>
                <strong>PRO</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                 <a href="{{url('/home')}}">
                 <i class="fas fa-home"></i>
                       <b>HOME</b> 
                    </a>
                 </li>
                 <li class="{{'proveedores'==Request::is('proveedores*')?'active':''}}">
                <a href="{{route('proveedores.index')}}">
                <i class="fas fa-handshake"></i>
                         <b>Proveedores </b>
                    </a>
                <li>
                     <li class="{{'alumnos'==Request::is('alumnos*')?'active':''}}">
                <a href="{{route('alumnos.index')}}">                       
                <i class="fas fa-handshake"></i>
                    <b>Alumnos</b>
                    </a>
                    </li>
                    <li class="{{'personal_academicos'==Request::is('personal_academicos*')?'active':''}}">
                    <a href="{{route('personal_academicos.index')}}">
                    <i class="fas fa-handshake"></i>
                    <b>Personal Academico</b>
                    </a>
                    </li> 
                    <li class="{{'docentes'==Request::is('docentes*')?'active':''}}">
                <a href="{{route('docentes.index')}}">                       
                <i class="fas fa-handshake"></i>
                    <b>Servicio Social</b>
                    </a>
                    </li>
                    <li class="{{'docentes'==Request::is('docentes*')?'active':''}}">
                <a href="{{route('docentes.index')}}">                       
                <i class="fas fa-briefcase"></i>
                    <b>Residencia Profesional</b>
                    </a>
                    </li>
                   </a>
                    <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        <b>Tutorias</b>
                    </a>
                    </li> 
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        <b> Pages</b>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        <b>Portfolio</b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <b>FAQ</b>
                        
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        <b>Contact</b>
                    </a>
                </li>
            </ul>

           
        </nav>

        <!-- Page Content  -->
         <!--<div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                     

                 

            
        </div>-->
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>