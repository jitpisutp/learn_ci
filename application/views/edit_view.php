
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="col-md-7">
                <h4>Form edit data</h4>
                <form action="<?php echo site_url('Insertdata/editdata');?>" method="post" class="form-horizontal">
                    
    
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">name</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_name" required class="form-control"
                            placeholder="name" value="<?php echo $rsedit->m_name;?> "  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">lastname</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_lname" required class="form-control"
                            placeholder="lastname" value="<?php echo $rsedit->m_lname;?> ">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-6">
                            <input type="hidden" name="m_id" value="<?php echo $rsedit->m_id;?>">
                            <button type="submit" class="btn btn-primary">
                            SAVE</button>
                        </div>
                    </div>

                <form> 
            </div>
        </div>
    </div>
