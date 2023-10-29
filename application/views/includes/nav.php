      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url();?>">Home</a> 
          </li>
            
      <?php if(! $this->session->userdata('id')){ ?>
        <li class="nav-item"> 
          <a class="nav-link" aria-current="page" href="<?php echo base_url();?>user/sign_in">Login</a>
        </li>
      <?php } ?>

      <?php  if($this->session->userdata('id')){ ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url();?>user/profile">Profile</a>
        </li> 

      <?php } ?>
        <?php  if($this->session->userdata('id')){ ?> 
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url();?>user/deshboard">Deshboard</a>
          </li>
              
      <?php  }  ?>
        </div>
          <div class="mx-2">
        <?php  if($this->session->userdata('id')){ ?> 
          <a class="nav-link" aria-current="page" href="<?php echo base_url();?>user/logout">
            <button class="btn btn-outline-danger">Logout</button>
          </a>
      <?php  }  ?>
          </div>
            <div class="mx-2">  
              <strong >
                <?php  
                if($this->session->userdata('id')){
                  if($this->session->userdata('roll')==1){
                    echo "Superadmin";
                  }
                  elseif($this->session->userdata('roll')==2){
                    echo "Admin";
                  }
                  else{
                    echo "User";
                  }
                }
      ?> 
              </strong>
              </div>
            </ul>
          </nav>