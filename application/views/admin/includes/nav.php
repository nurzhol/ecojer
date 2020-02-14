<div class="page-container" style="min-height: 1000px">
<div class="page-content">
    <!-- inject:SIDEBAR -->

    <div id="sidebar-main" class="sidebar sidebar-default">
		<div class="sidebar-content">
			<ul class="navigation">
				<li class="navigation-header">
					<span>Main</span>
					<i class="icon-menu"></i>
				</li>

				<li class="<?php if($this->uri->segment(1) == 'Dashboard'){ echo 'active'; }; ?>">
					<a href="<?php echo base_url('Dashboard');?>"><i class="fa fa-home"></i> <span>Dashboard</span></a>
				</li>

				<li class="navigation-header">
					<span>Operation Control Application</span>
					<i class="icon-menu"></i>
				</li>

				<li class="<?php if($this->uri->segment(1) == 'admin/news'){ echo 'active'; }; ?>">
					<a href="<?php echo base_url('admin/news');?>"><i class="fa fa-home"></i> <span>News</span></a>
				</li>
				
				<li class="<?php if($this->uri->segment(1) == 'admin/projects'){ echo 'active'; }; ?>">
					<a href="<?php echo base_url('admin/projects');?>"><i class="fa fa-home"></i> <span>Projects</span></a>
				</li>
				
				<li class="<?php if($this->uri->segment(1) == 'admin/photogallery'){ echo 'active'; }; ?>">
					<a href="<?php echo base_url('admin/photogallery');?>"><i class="fa fa-home"></i> <span>Photo gallery</span></a>
				</li>
				
				<li class="<?php if($this->uri->segment(1) == 'admin/videogallery'){ echo 'active'; }; ?>">
					<a href="<?php echo base_url('admin/videogallery');?>"><i class="fa fa-home"></i> <span>Video gallery</span></a>
				</li>
				
				
				


	
			
			</ul>
		</div>
    </div>
