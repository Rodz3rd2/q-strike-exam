var App2 =
{
	onReady: function ()
	{
		$('.delete-material').click(Material.delete);
	}
};

var Material =
{
	delete: function (e)
	{
		e.preventDefault();
		_this = $(this);

		$.smkConfirm({
			text: "Are you sure ?",
			accept: "Yes",
			cancel: "Cancel"
		},
		function (res)
		{
			if ( res )
			{
				window.location = _this.attr('href');
			}
		});
	}
};

$(document).ready( App2.onReady );