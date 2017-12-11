<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <br>
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/icon-user.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <br>
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
               <!-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>-->
            </div>
        </div>
        @endif

        <br><br>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>-->
            
            @if( Auth::user()->hasRole('Agricultor'))

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Minha Vitrine</span></a></li>

             <li><a href="{{ route('agricultor.create') }}"><i class='fa fa-plus'></i> <span>Novo Anúncio</span></a></li>

            @elseif( Auth::user()->hasRole('Secretaria'))

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Minhas Chamadas Públicas</span></a></li>

             <li><a href="{{ route('secretaria.create') }}"><i class='fa fa-plus'></i> <span>Nova Chama Pública</span></a></li>

            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
