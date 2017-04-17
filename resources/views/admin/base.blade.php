@extends('base-layout')
@section('content')
<div layout="row" flex>
  <md-sidenav md-component-id="left" md-is-locked-open="$mdMedia('gt-md')" class="md-sidenav-left app-side-nav">
    <md-toolbar class="main-header">
      <div class="md-toolbar-tools">
        <h1>Admin panel</h1>
      </div>
    </md-toolbar>
    <md-sidemenu>
      <md-sidemenu-group>
        <md-sidemenu-content md-heading="Settings" md-arrow="true">
          <md-sidemenu-button href="/admin/settings/term">Terms</md-sidemenu-button>
          <md-sidemenu-button href="#">Programs</md-sidemenu-button>
          <md-sidemenu-button href="#">Course</md-sidemenu-button>
          <md-sidemenu-button href="#">ProgramCourseTerm</md-sidemenu-button>
          <md-sidemenu-button href="#">AnswerTypes</md-sidemenu-button>
          <md-sidemenu-button href="#">FixedQuestions</md-sidemenu-button>
          <md-sidemenu-button href="#">FixedQuestionsOptions</md-sidemenu-button>
          <md-sidemenu-button href="#">CustomQuestions</md-sidemenu-button>
        </md-sidemenu-content>

        <md-sidemenu-button href="/admin/dashboard">Dashboard</md-sidemenu-button>

        <md-divider></md-divider>
        <md-sidemenu-button href="#">Logout</md-sidemenu-button>

      </md-sidemenu-group>
    </md-sidemenu>
  </md-sidenav>
  <md-content flex layout-padding>
    @yield('admin-content')
  </md-content>
</div>
@stop
