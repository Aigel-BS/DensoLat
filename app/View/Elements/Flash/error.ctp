<style>
	.error {
		background-color: #db163d;
		color: white;
		border-radius: 8px;
		text-align: center;
		font-size: 1em;
		padding: 1%;
		font-family: Denso;
	}
</style>
<div id="flash-<?php echo h($key) ?>" class="message-info error">
	<?php echo h($message) ?>.
</div>
