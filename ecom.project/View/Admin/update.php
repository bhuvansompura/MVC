<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><section class="vh-100 gradient-custom">
  <form action="" method="post">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">UPDATE</h3>
            
                 <div class="form-outline mb-4">
                   
                  <input type="text" id="name" name="name" value="<?php echo $EditRes['Data'][0]->name ;?>" placeholder="Your Name" class="form-control form-control-lg" />
                </div>
                 <div class="form-outline mb-4">
                   
                  <input type="email" id="email" name="email" value="<?php echo $EditRes['Data'][0]->email; ?>" placeholder="Your Email" class="form-control form-control-lg" />
                </div>
                 <div class="form-outline mb-4">
                   
                  <input type="mobile" id="mobile" name="mobile" value="<?php echo $EditRes['Data'][0]->mobile ;?>" placeholder="Your Mobile" class="form-control form-control-lg" />
                </div>
                 <div class="form-outline mb-4">
                   
                  <input type="password" id="password" name="password" value="<?php echo $EditRes['Data'][0]->password ;?>" placeholder="Your Password" class="form-control form-control-lg" />
                </div>
                <div class= "btn-btn-primary">
                  <button type="submit" name="update" class="btn btn-success">Update</button>

                </div>
        
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
</section>                