 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
  <div class="sidebar-brand-icon rotate-n-15">
  <i class="fas fa-user-shield"></i>
  </div>
  <div class="sidebar-brand-text mx-3">AG-Plan <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{url('accueil-admin')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Tableau de bord</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu Admin
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
  <i class="fas fa-chalkboard-teacher"></i>
    <span>Element</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Action:</h6>
      <a class="collapse-item" href="{{url('ajouter_un_element')}}">Ajouter un élément</a>
      <a class="collapse-item" href="{{url('ajouter_formation')}}">Ajouter une formation</a>
      <a class="collapse-item" href="{{url('liste_des_formation')}}">Liste Formation</a>
      <a class="collapse-item" href="{{url('liste_des_vente')}}">Liste Vente</a>
      <a class="collapse-item" href="{{url('liste_des_construction')}}">Liste Construction</a>
      <a class="collapse-item" href="{{url('liste_des_location')}}">Liste Location</a>
      <a class="collapse-item" href="{{url('liste_agenda')}}">Liste Agenda</a>
    </div>
  </div>
</li>



<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepages" aria-expanded="true" aria-controls="collapsepages">
    <i class="far fa-file-word"></i>
    <span>Pages</span>
  </a>
  <div id="collapsepages" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Modifier les pages</h6>
      <a class="collapse-item" href="{{url('ajouter_une_page')}}">Ajouter un element</a>
      <a class="collapse-item" href="{{url('liste_page_1')}}">Liste de Conseil</a>
      <a class="collapse-item" href="{{url('liste_page_2')}}">Liste de Etude</a>
      <a class="collapse-item" href="{{url('liste_page_3')}}">Liste de Coaching</a>
      <a class="collapse-item" href="{{url('liste_page_4')}}">Liste de Audit</a>
      <a class="collapse-item" href="{{url('liste_page_5')}}">Liste de Consignation</a>
      <a class="collapse-item" href="{{url('liste_page_6')}}">Liste de Transport</a>
      <a class="collapse-item" href="{{url('liste_page_7')}}">Liste de Répresentation</a>
      <a class="collapse-item" href="{{url('liste_page_8')}}">Liste de Entreposage</a>
      <a class="collapse-item" href="{{url('liste_page_8')}}">Liste de Faire gérer</a>
      <a class="collapse-item" href="{{url('liste_page_10')}}">Liste de Association</a>
      <a class="collapse-item" href="{{url('liste_page_11')}}">Liste de Agenda</a>
      <a class="collapse-item" href="{{url('liste_page_22')}}">Liste de Partenaires</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
{{-- <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.html">Colors</a>
      <a class="collapse-item" href="utilities-border.html">Borders</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>
    </div>
  </div>
</li> --}}

 




<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->