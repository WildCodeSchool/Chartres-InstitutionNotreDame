$(document).ready(function()
{
	var open1;
	var open2;
	var open3;
	var open4;

	$("#menu1").click(function()
	{
		$("#dropdown2").css("display", "none");
		$("#dropdown3").css("display", "none");
		$("#dropdown4").css("display", "none");
		open2 = "0";
		open3 = "0";
		open4 = "0";

		if (open1 == "1")
		{
			$("#dropdown1").css("display", "none");
			open1 = "0";
		}
		else
		{
			$("#dropdown1").css("display", "block");
			$("#dropdown2").css("display", "none");
			$("#dropdown3").css("display", "none");
			$("#dropdown4").css("display", "none");
			open1 = "1";
		}
	});
	$("#menu2").click(function()
	{
		$("#dropdown1").css("display", "none");
		$("#dropdown3").css("display", "none");
		$("#dropdown4").css("display", "none");
		open1 = "0";
		open3 = "0";
		open4 = "0";

		if (open2 == "1")
		{
			$("#dropdown2").css("display", "none");
			open2 = "0";
		}
		else
		{
			$("#dropdown1").css("display", "none");
			$("#dropdown2").css("display", "block");
			$("#dropdown3").css("display", "none");
			$("#dropdown4").css("display", "none");
			open2 = "1";
		}
	});
	$("#menu3").click(function()
	{
		$("#dropdown1").css("display", "none");
		$("#dropdown2").css("display", "none");
		$("#dropdown4").css("display", "none");
		open1 = "0";
		open2 = "0";
		open4 = "0";

		if (open3 == "1")
		{
			$("#dropdown3").css("display", "none");
			open3 = "0";
		}
		else
		{
			$("#dropdown1").css("display", "none");
			$("#dropdown2").css("display", "none");
			$("#dropdown3").css("display", "block");
			$("#dropdown4").css("display", "none");
			open3 = "1";
		}
	});
	$("#menu4").click(function()
	{
		$("#dropdown1").css("display", "none");
		$("#dropdown2").css("display", "none");
		$("#dropdown3").css("display", "none");
		open1 = "0";
		open2 = "0";
		open3 = "0";

		if (open4 == "1")
		{
			$("#dropdown4").css("display", "none");
			open4 = "0";
		}
		else
		{
			$("#dropdown1").css("display", "none");
			$("#dropdown2").css("display", "none");
			$("#dropdown3").css("display", "none");
			$("#dropdown4").css("display", "block");
			open4 = "1";
		}
	});
});