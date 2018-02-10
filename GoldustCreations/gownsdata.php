<html>
<style type="text/css">
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 8px;
  border-radius: 8px;
  font-size: 10px;
  font-weight: bold;
}
 button.edit{
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 8px;
  border-radius: 8px;
  font-size: 10px;
  font-weight: bold;
  width: 80px;
  float: right;
}
</style>
<body>
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Gown ID</th>
                  <th>Event ID</th>
                  <th>Gown Type</th>
                  <th>Quantity</th>
                  <th>Photo</th>
                </tr>
                <tr>
                  <td>00001</td>
                  <td>10000</td>
                  <td>Cocktail</td>
                  <td>10</td>
                  <td> 
                    <div class="upload-btn-wrapper">
                    <button class="btn">Upload a file</button>
                    <input type="file" name="myfile" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>00002</td>
                  <td>20000</td>
                  <td>Maxi Dress</td>
                  <td>10</span></td>
                  <td> 
                    <div class="upload-btn-wrapper">
                    <button class="btn">Upload a file</button>
                    <input type="file" name="myfile" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>00003</td>
                  <td>30000</td>
                  <td>Long dress</td>
                  <td>10</span></td>
                  <td> 
                    <div class="upload-btn-wrapper">
                    <button class="btn">Upload a file</button>
                    <input type="file" name="myfile" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>00005</td>
                  <td>50000</td>
                  <td>wedding dress</td>
                  <td>1</td>
                  <td> 
                    <div class="upload-btn-wrapper">
                    <button class="btn">Upload a file</button>
                    <input type="file" name="myfile" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="fixed-bottom">
        <button type="button" class="edit">Add Tool</button>
      </div>
      <div class="fixed-bottom">
        <button type="button" class="edit">Edit</button>
      </div>
    </section>
</body>
</html>