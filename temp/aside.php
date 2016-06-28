<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Kevin Barasa</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#" data-toggle="modal" data-target="#addFeature"><i class="fa fa-circle-o"></i> Add Features</a></li>
          <li class="active"><a href="#"><i class="fa fa-circle-o"></i> View Features</a></li>
        </ul>
      </li>

      <li class="header">Regions</li>
      <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Island</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Mainland</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<div class="modal fade" id="addFeature" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add a feature on Mombasa Map</h4>
      </div>
      <div class="modal-body">
        <form role="form" name="featureForm">
          <!-- text input -->
          <div class="form-group">
            <label>Title</label>
            <input type="text" id="title" class="form-control" placeholder="Name the image place">
          </div>
        <!-- textarea -->
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="desc" rows="3" placeholder="Describe the feature on photo"></textarea>
          </div>
          <!-- text input -->
          <div class="form-group">
            <label>Longitude</label>
            <input type="number" id="long" class="form-control" placeholder="Enter Longitude">
          </div>
          <!-- text input -->
          <div class="form-group">
            <label>Latitude</label>
            <input type="number" id="lat" class="form-control" placeholder="Enter Latitude">
          </div>
          <!-- text input -->
          <div class="form-group">
            <label>Photo Link</label>
            <input type="text" id="photo_url" class="form-control" placeholder="Enter Photo Link">
          </div>

          <!-- select -->
          <div class="form-group">
            <label>Feature Type</label>
            <select class="form-control" id="type">
              <option>Road</option>
              <option>Police Station</option>
              <option>Building</option>
              <option>Physical Feature</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary addFeature">Push to Map</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
