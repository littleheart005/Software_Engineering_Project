<script type="text/javascript">
    function fncSubmit() {
        if (document.getElementById('PID').value == "" &
            document.getElementById('PNAME').value == "" &
            document.getElementById('SPEC').value == "" &
            document.getElementById('LOC').value == "" &
            document.getElementById('STAFF').value == "") {
            alert('Please enter product detail');
            return false;
        }

        if (document.getElementById('PID').value == "") {
            alert('Please Enter product id');
            return false;
        }
        if (document.getElementById('PNAME').value == "") {
            alert('Please enter product name');
            return false;
        }
        if (document.getElementById('PTYPE').value == "") {
            alert('Please select product type');
            return false;
        }

        if (document.getElementById('SPEC').value == "") {
            alert('Please enter product description');
            return false;
        }

        if (document.getElementById('LOC').value == "") {
            alert('Please enter location of the product');
            return false;
        }
        if (document.getElementById('PSTATUS').value == "") {
            alert('Please select product status');
            return false;
        }
        if (document.getElementById('STAFF').value == "") {
            alert('Please enter staff name');
            return false;
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
  <div class="container" align="center">
    <form name="admin" action="adddb.php" method="POST" id="admin" class="form-horizontal"
        onSubmit="JavaScript:return fncSubmit();">
        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Product ID</label>
                <input name="PID" type="text" class="form-control" id="PID" placeholder="EX. 5602130000087/1"
                    title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Product Name</label>
                <input name="PNAME" type="text" class="form-control" id="PNAME"
                    placeholder="EX. ชุดคอมพิวเตอร์ประมวลผลระดับสูง" minlength="2" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Product Type</label><br>
                <select name="PTYPE" id="PTYPE" class="form-control">
                    <option value=''>Please Select</option>
                    <option value='อาคารถาวร'>อาคารถาวร</option>
                    <option value='อาคารชั่วคราว/โรงเรือน'>อาคารชั่วคราว/โรงเรือน</option>
                    <option value='สิ่งก่อสร้าง'>สิ่งก่อสร้าง</option>
                    <option value='ครุภัณฑ์สำนักงาน'>ครุภัณฑ์สำนักงาน</option>
                    <option value='ครุภัณฑ์ยานพาหนะและขนส่ง'>ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                    <option value='ครุภัณฑ์ไฟฟ้าและวิทยุ'>ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                    <option value='ครุภัณฑ์โฆษณาและเผยแพร่'>ครุภัณฑ์โฆษณาและเผยแพร่</option>
                    <option value='ครุภัณฑ์การเกษตร'>ครุภัณฑ์การเกษตร</option>
                    <option value='ครุภัณฑ์โรงงาน'>ครุภัณฑ์โรงงาน</option>
                    <option value='ครุภัณฑ์ก่อสร้าง'>ครุภัณฑ์ก่อสร้าง</option>
                    <option value='ครุภัณฑ์สำรวจ'>ครุภัณฑ์สำรวจ</option>
                    <option value='ครุภัณฑ์วิทยาศาสตร์การแพทย์'>ครุภัณฑ์วิทยาศาสตร์การแพทย์</option>
                    <option value='ครุภัณฑ์คอมพิวเตอร์'>ครุภัณฑ์คอมพิวเตอร์</option>
                    <option value='ครุภัณฑ์การศึกษา'>ครุภัณฑ์การศึกษา</option>
                    <option value='ครุภัณฑ์งานบ้านงานครัว'>ครุภัณฑ์งานบ้านงานครัว</option>
                    <option value='ครุภัณฑ์กีฬา'>ครุภัณฑ์กีฬา</option>
                    <option value='ครุภัณฑ์ดนตรีและนาฏศิลป์'>ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
                    <option value='ครุภัณฑ์อาวุธ'>ครุภัณฑ์อาวุธ</option>
                    <option value='ครุภัณฑ์สนาม'>ครุภัณฑ์สนาม</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Detail</label>
                <input name="SPEC" type="text" class="form-control" id="SPEC" placeholder="EX. Dell Optiplex 7010 DT" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Location or Borrowing Person</label>
                <input name="LOC" type="text" class="form-control" id="LOC" placeholder="EX. SC6301 / Mrs. Nameentra" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Product Status</label><br>
                <select name="PSTATUS" id="PSTATUS" class="form-control">
                    <option value=''>Please Select</option>
                    <option value='Available'>Available</option>
                    <option value='Unavailable'>Unavailable</option>
                    <option value='Borrowed'>Borrowed</option>
                    <option value='Overdue'>Overdue</option>
                    <option value='Repairing'>Repairing</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Borrowing Date</label>
                <input name="BDATE" type="text" class="form-control" id="BDATE" placeholder="Ex. 29/02/2020"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Return Date</label>
                <input name="RDATE" type="text" class="form-control" id="RDATE" placeholder="Ex. 29/02/2020"
                    pattern="\d{1,2}/\d{1,2}/\d{4}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3" align="right"></div>
            <div class="col-sm-6" align="left">
                <label for="inputUsername">Person in charge</label>
                <input name="STAFF" type="text" class="form-control" id="STAFF" placeholder="Ex. Thanapon" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-6" align="right">
                <button type="submit" class="btn btn-success" id="btn"> <span
                        class="glyphicon glyphicon-saved"></span>Submit</button>
            </div>
        </div>
    </form>
  </div>
</body>

</html>