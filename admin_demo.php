<?php include 'myheader.php'; ?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #eee;
    font-family: "Poppins", sans-serif;
    font-weight: 300
}

.height {
    height: 80vh
}

.search {

    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1);
    border-radius : 50px;
}

.search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
}

.search input:focus {
    box-shadow: none;
    border: 2px solid blue
}

.search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue
}
</style>
<form action="admin_demo1.php" method="post">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" name="information" class="form-control" placeholder="Search Customer or Mover.." required> <button type="submit" class="btn btn-primary">Search</button> </div>
                </div>
            </div>
        </div>
</form>
<?php include 'footer.php'; ?>