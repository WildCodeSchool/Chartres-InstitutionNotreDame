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
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
			open1 = "0";
		}
		else
		{
			$("#menu1").css("background-color", "#FFFFFF");
			$("#menu1").css("color", "#5E9CD2");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
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
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
			open2 = "0";
		}
		else
		{
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#FFFFFF");
			$("#menu2").css("color", "#5E9CD2");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
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
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
			open3 = "0";
		}
		else
		{
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#FFFFFF");
			$("#menu3").css("color", "#5E9CD2");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
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
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#5E9CD2");
			$("#menu4").css("color", "#FFFFFF");
			open4 = "0";
		}
		else
		{
			$("#menu1").css("background-color", "#5E9CD2");
			$("#menu1").css("color", "#FFFFFF");
			$("#menu2").css("background-color", "#5E9CD2");
			$("#menu2").css("color", "#FFFFFF");
			$("#menu3").css("background-color", "#5E9CD2");
			$("#menu3").css("color", "#FFFFFF");
			$("#menu4").css("background-color", "#FFFFFF");
			$("#menu4").css("color", "#5E9CD2");
			$("#dropdown1").css("display", "none");
			$("#dropdown2").css("display", "none");
			$("#dropdown3").css("display", "none");
			$("#dropdown4").css("display", "block");
			open4 = "1";
		}
	});

	$(".inner-menu .sub-menu .sub-menu li").removeClass();
	$(".inner-menu .sub-menu .sub-menu li").addClass("col-md-3");
});