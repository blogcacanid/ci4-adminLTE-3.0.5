<?php $request = \Config\Services::request(); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <?php 
                        if (
                            $request->uri->getSegment(1) == ''
                            || $request->uri->getSegment(1) == 'home'
                        )
                        { 
                            echo ucwords('AdminLTE-3.0.5'); 
                        }
                    ?>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <?php 
                        if ($request->uri->getSegment(1) == '')
                        { 
                            echo '<li class="breadcrumb-item"><a href="#">Home</a></li>'; 
                        }
                        else
                        { 
                            echo '<li class="breadcrumb-item"><a href="#">Home</a></li>'; 
                            echo '<li class="breadcrumb-item active">'.ucwords($request->uri->getSegment(1)).'</li>'; 
                        } 
                    ?>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>