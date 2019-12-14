<!-- ========== SIDE BAR ========== -->
<!-- <?php $login_role = $this->session->userdata('login_role'); ?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo base_url();?>Dashboard" class="site_title"><i>SV</i> <span>SkyVoice<small></small></span></a>
    </div>

    <div class="clearfix"></div>

    <br />
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-home"></i> Dashboard </a>
            
          </li>
          <?php if ($login_role == 'Admin') { ?>
          <li><a><i class="fa fa-users"></i> Users   <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url();?>Users"> All Users </a></li>
              <li><a href="<?php echo base_url();?>Users/unverified"> Unverified Users </a></li>
              <li><a href="<?php echo base_url();?>Users/verified"> Verified Users </a></li>
              <li><a href="<?php echo base_url();?>Users/search"> Search Users </a></li>
              <li><a href="<?php echo base_url();?>Users/free_search"> Free Users </a></li>
              <li><a href="<?php echo base_url();?>Users/custom_range"> Custom Range </a></li>
            </ul>
          </li>  
          <li><a><i class="fa fa-building"></i> Company   <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url();?>Company"> All Company</a></li>
            </ul>
          </li> 
          <li><a><i class="fa fa-check-square-o"></i> Placements   <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url();?>Placements"> All Placements</a></li>
            </ul>
          </li> 
          <li><a><i class="fa fa-commenting-o"></i> Chat Management <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo base_url();?>Chat/one_to_one">  One To One</a></li>
              <li><a href="<?php echo base_url();?>Chat/one_to_many">  One To Many</a></li>
            </ul>
          </li> 
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div> -->
<!-- ========== SIDE BAR ==========-->
<style type="text/css">
  .sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;

}
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
</style>
 <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> 
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>dashboard" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span class="hide-menu">Dashboard</span>
                          </a>
                        </li>
                        <?php if ($login_role == 'Admin') { ?>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           <i class="fas fa-users"></i>
                            <span class="hide-menu"> Users </span>
                          </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users" class="sidebar-link">
                                    <i class="fas fa-user"></i>
                                    <span class="hide-menu">All Users </span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users/unverified" class="sidebar-link">
                                   <i class="fas fa-user"></i>
                                    <span class="hide-menu">Unverified Users</span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users/verified" class="sidebar-link">
                                    <i class="fas fa-user"></i>
                                    <span class="hide-menu"> Verified Users </span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users/search" class="sidebar-link">
                                    <i class="fas fa-user"></i>
                                    <span class="hide-menu"> Search Users </span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users/free_search" class="sidebar-link">
                                    <i class="fas fa-user"></i>
                                    <span class="hide-menu"> Free Users</span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Users/custom_range" class="sidebar-link">
                                    <i class="fas fa-user"></i>
                                    <span class="hide-menu"> Custom Range </span>
                                  </a>
                                </li>
                              </ul>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="hide-menu">Category </span>
                          </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                               <i class="far fa-building"></i>
                                <span class="hide-menu">GK </span>
                              </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_gk_hindi_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In Hindi </span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_gk_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In English </span>
                                </a>
                                </li>
                              </ul>
                             </li>
                             <li class="sidebar-item">
                              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-building"></i>
                                <span class="hide-menu">Language </span>
                              </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_english_hindi_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In Hindi </span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_english_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In English </span>
                                </a>
                                </li>
                              </ul>
                            </li>
                            <li class="sidebar-item">
                              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-building"></i>
                                <span class="hide-menu">QA </span>
                              </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_qa_hindi_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In Hindi </span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_qa_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In English </span>
                                </a>
                                </li>
                              </ul>
                            </li>
                            <li class="sidebar-item">
                              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-building"></i>
                                <span class="hide-menu">LR </span>
                              </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_lr_hindi_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In Hindi </span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_lr_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In English </span>
                                </a>
                                </li>
                              </ul>
                            </li>
                            <li class="sidebar-item">
                              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-building"></i>
                                <span class="hide-menu">Technicle </span>
                              </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_technical_hindi_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In Hindi </span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>Category/view_technical_category" class="sidebar-link">
                                  <i class="fas fa-tasks"></i>
                                  <span class="hide-menu">In English </span>
                                </a>
                              </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-building"></i>
                            <span class="hide-menu">Company </span>
                          </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Company" class="sidebar-link">
                                    <i class="far fa-building"></i>
                                    <span class="hide-menu"> All Company </span>
                                  </a>
                                </li>
                              </ul>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="far fa-check-square"></i>
                            <span class="hide-menu">Placements </span>
                          </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Placements" class="sidebar-link">
                                    <i class="fa fa-check"></i>
                                    <span class="hide-menu"> All Placements </span>
                                  </a>
                                </li>
                              </ul>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-comment-dots"></i>
                            <span class="hide-menu"> Chat Management </span>
                          </a>
                              <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Chat/one_to_one" class="sidebar-link">
                                   <i class="far fa-comment-alt"></i>
                                    <span class="hide-menu"> One To One </span>
                                  </a>
                                </li>
                                <li class="sidebar-item">
                                  <a href="<?php echo base_url();?>Chat/one_to_many" class="sidebar-link">
                                  <i class="far fa-comment-alt"></i>
                                    <span class="hide-menu"> One To Many </span>
                                  </a>
                                </li>
                              </ul>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-briefcase"></i>
                            <span class="hide-menu"> Wallet </span>
                          </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item">
                                <a href="<?php echo base_url();?>wallet/view_wallet" class="sidebar-link">
                                 <i class="fas fa-suitcase"></i>
                                  <span class="hide-menu"> Wallet Money </span>
                                </a>
                              </li>
                            </ul>
                        </li>
                      <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <script type="text/javascript">
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling;
              if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
              } else {
                dropdownContent.style.display = "block";
              }
            });
          }
        </script>
