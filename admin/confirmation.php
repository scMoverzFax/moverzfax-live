<?php include 'admin_header.php'; ?>
<style>
	* {
		font-family: sans-serif;
		box-sizing: border-box;
	}

    .link {
        padding: 30px;
        font-size: 2rem;
    }

	.b-container {
		overflow: hidden;
		height: fit-content;
		width: fit-content;
		position: relative;
		padding: 50px;
		max-width: 1440px;
	}

	.in-container {
		background-color: white;
		box-shadow: 0 0 10px 2px #eee;
		/* border-radius: 10px 10px; */
		border: 1px solid #eee;
		/* width: fit-content; */
		padding: 50px;
	}

	.bg-form {
		margin: 0;
		width: 100%;
		background-color: white;
	}

	.i-width {
		width: 100%;
	}

	.row .button-mf {
		font-size: 15px;
		color: #fff;
		background-color: #85CA63;
		border-radius: 5px 5px;
		width: 150px;
		border-color: none;
		transition: all .5s;
	}

	.row .button-mf:hover {
		background-color: #67bd3c;
		border-color: #55bd1a;
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;
	}

	.row .button-mf-cancel {
		font-size: 15px;
		color: #fff;
		border-radius: 5px 5px;
		width: 150px;
		background-color: #dc3545;
		border-color: #dc3545;
		transition: all .5s;
	}

	.row .button-mf-cancel:hover {
		color: #fff;
		border-radius: 10px;
		width: 200px;
		transition: all .5s;
		background-color: #c82333;
		border-color: #bd2130;
	}

	/* Desktop-mobile approach --------------------------------------------------------------*/

	/* smaller than Desktop HD */
	@media (max-width: 1200px) {}

	/* smaller than desktop */
	@media (max-width: 1000px) {}

	/* smaller than tablet */
	@media (max-width: 750px) {}

	/* smaller than phablet (also point when grid becomes active) */
	@media (max-width: 550px) {}

	/* smaller than mobile */
	@media (max-width: 400px) {}
</style>
<div style="margin-top: 30px;">
    <h3 class="text-center mt-2">Payment Received</h3>
</div>

<?php include '../home/footer.php'; ?>