<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="AutoMatedwarningPopup.aspx.cs" Inherits="PopUpPractiseApp.AutoMatedwarningPopup" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="cc1" %>
<%@ Register TagPrefix="ajaxToolkit" Namespace="AjaxControlToolkit" Assembly="AjaxControlToolkit, Version=4.5.7.1213, Culture=neutral, PublicKeyToken=28f01b0e84b6d53e" %>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Automated PopUp Warning</title>
    <script language="javascript" type="text/javascript">
        //alert('hi');
        function pageLoad() {
            ShowPopup();
            setTimeout(HidePopUp, 2000);
        }

        function ShowPopup() {
            $find('modalpopup').show();
        }

        function HidePopUp() {
            $find('modalpopup').hide();
        }
    </script>
</head>
<body>
    <form id="form1" runat="server">
    <div style="min-height: 700px;">
    
        <ajaxToolkit:ToolkitScriptManager ID="ScriptManager1" runat="server">
        </ajaxToolkit:ToolkitScriptManager>
        <asp:Button ID="Button1" runat="server" Text="Click here to show the modal" style="display:none" />
        <cc1:modalpopupextender id="ModalPopupExtender1" backgroundcssclass="ModalPopupBG" BehaviorID="modalpopup"
            runat="server" cancelcontrolid="btnCancel" okcontrolid="btnOkay" targetcontrolid="Button1"
            popupcontrolid="Panel1" drag="true" popupdraghandlecontrolid="PopupHeader">
       </cc1:modalpopupextender>
        <div id="Panel1" style="display: none;" class="popupConfirmation">
            <div class="popup_Container">
                <div class="popup_Titlebar" id="PopupHeader">
                    <div class="TitlebarLeft">
                        Warnning Popup Header</div>
                    <div class="TitlebarRight">
                    </div>
                </div>
                <div class="popup_Body">
                    <p>
                        This is a warnning popup
                    </p>
                </div>
                                <div class="popup_Buttons" style="display:none">
                    <input id="btnOkay" value="Done" type="button" />
                    <input id="btnCancel" value="Cancel" type="button" />
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
