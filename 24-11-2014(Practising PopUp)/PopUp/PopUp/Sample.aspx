<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Sample.aspx.cs" Inherits="PopUp.Sample" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
        <style type="text/css">  
            .web_dialog_overlay  
            {  
                position: fixed;  
                top: 0;  
                right: 0;  
                bottom: 0;  
                left: 0;  
                height: 100%;  
                width: 100%;  
                margin: 0;  
                padding: 0;  
                background: #000000;  
                opacity: .15;  
                filter: alpha(opacity=15);  
                -moz-opacity: .15;  
                z-index: 101;  
                display: none;  
            }  
            .web_dialog  
            {  
                display: none;  
                position: fixed;  
                width: 300px;  
                height: 215px;  
                top: 50%;  
                left: 50%;  
                margin-left: -190px;  
                margin-top: -100px;  
                background-color: #ffffff;  
                border: 2px solid #336699;  
                padding: 0px;  
                z-index: 102;  
                font-family: Verdana;  
                font-size: 10pt;  
            }  
            .web_dialog_title  
            {  
                border-bottom: solid 2px #336699;  
                background-color: #336699;  
                padding: 4px;  
                color: White;  
                font-weight: bold;  
            }  
            .web_dialog_title a  
            {  
                color: White;  
                text-decoration: none;  
            }  
            .align_right  
            {  
                text-align: right;  
            }  
        </style> 
<body>  
    <form id="form1" runat="server">  
    <asp:Button Text="Modal Dialog" runat="server" ID="btnShowModal" />  
    <asp:Button Text="Sample Dialog" runat="server"  ID="btnShowSimple" Visible="false"/>  
    <br />  
    <br />  
    <div id="output"></div>  
    <div id="overlay" class="web_dialog_overlay"></div>  
    <div id="dialog" class="web_dialog">  
        <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">  
            <tr>  
                <td class="web_dialog_title">Online Survey</td>  
                <td class="web_dialog_title align_right"><a href="#" id="btnClose">Close</a></td>  
            </tr>  
            <tr>  
                <td> </td>  
                <td> </td>  
            </tr>  
            <tr>  
                <td colspan="2" style="padding-left: 15px;"><b>In Wchich Country You Belongs? </b></td>  
            </tr>  
              
            <tr>  
                <td colspan="2" style="padding-left: 15px;">  
                   <asp:RadioButtonList runat="server" ID="brands">  
                        <asp:ListItem Text="India" Value="India" />  
                        <asp:ListItem Text="America" Value="America" />  
                        <asp:ListItem Text="Canada" Value="Canada" />  
                        <asp:ListItem Text="Chaina" Value="Chaina" />  
                    </asp:RadioButtonList>  
                </td>  
            </tr>  
              
            <tr>  
                <td  style="text-align: center;"><asp:Button Text="Submit" runat="server" ID="btnSubmit" /></td>  
                <td  style="text-align: center;"><asp:Button Text="Cancel" runat="server" ID="btnClose" /></td>  
            </tr>  
        </table>  
    </div>  
   </form>  
</body>
        <script type="text/javascript">

            $(document).ready(function () {

                $("#brands").attr("checked", false);
                $("#btnShowModal").click(function (e) {
                    ShowDialog(true);
                    e.preventDefault();
                });

                $("#btnClose").click(function (e) {
                    HideDialog();
                    e.preventDefault();
                });

                $("#btnSubmit").click(function (e) {
                    if ($("#brands").find("input:checked").length > 0) {
                        var brand = $("#brands input:radio:checked").val();
                        $("#output").html("<b>Your Country Is : </b>" + brand);
                        alert(" Your Country Is " + brand);
                        HideDialog();
                        e.preventDefault();
                    }
                    else {
                        alert("Please select Radio Button");
                        ShowDialog(true);
                        e.preventDefault();
                    }
                });

            });

            function ShowDialog(modal) {
                $("#overlay").show();
                $("#dialog").fadeIn(300);

                if (modal) {
                    $("#overlay").unbind("click");
                }
                else {
                    $("#overlay").click(function (e) {
                        HideDialog();
                    });
                }
            }

            function HideDialog() {
                $("#overlay").hide();
                $("#dialog").fadeOut(300);
            }

        </script>    
</html>
