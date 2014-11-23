<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="SmsMonitoringApp._Default" %>

<%@ Register Assembly="AjaxControlToolkit" Namespace="AjaxControlToolkit" TagPrefix="asp" %>
<%@ Register TagPrefix="ajaxToolkit" Namespace="AjaxControlToolkit" Assembly="AjaxControlToolkit, Version=4.5.7.1213, Culture=neutral, PublicKeyToken=28f01b0e84b6d53e" %>

<asp:Content runat="server" ID="FeaturedContent" ContentPlaceHolderID="FeaturedContent">
    <asp:ToolkitScriptManager ID="ToolkitScriptManager1" runat="server"></asp:ToolkitScriptManager>
    <asp:Button ID="Button1" runat="server" Text="Open PopUp" />
    <asp:Panel ID="Panel1" runat="server">
        Welcome
        <asp:Button ID="Ok" runat="server" Text="Ok" />
    </asp:Panel>
    <asp:ModalPopupExtender ID="ModalPopupExtender1" runat="server" DropShadow="True" OkControlID="OK" PopupControlID="Panel1" TargetControlID="Button1"></asp:ModalPopupExtender>
<!--  
    <asp:Button ID="ClientButton" runat="server" Text="Launch Modal Popup (Client)" />
    <asp:Panel ID="ModalPanel" runat="server" Width="500px">
 ASP.NET AJAX is a free framework for quickly creating a new generation of more 
 efficient, more interactive and highly-personalized Web experiences that work 
 across all the most popular browsers.<br />
 <asp:Button ID="OKButton" runat="server" Text="Close" />
        <br />
        <ajaxToolkit:ModalPopupExtender ID="mpe" runat="server" TargetControlId="ClientButton" 
 PopupControlID="ModalPanel" OkControlID="OKButton" />
        <asp:ScriptManager ID="asm" runat="server" />
        
        <asp:Button ID="ServerButton" runat="server" Text="Launch Modal Popup (Server)" 
 OnClick="ServerButton_Click" />
        <script runat="server">
            
    protected void ServerButton_Click(object sender, EventArgs e)
    {
        ClientScript.RegisterStartupScript(this.GetType(), "key", "launchModal();", true);
    }
        </script>
        <script type="text/javascript">
            var launch = false;
            function launchModal() {
                launch = true;
            }

            function pageLoad() {
                if (launch) {
                    $find("mpe").show();
                }
            }
</script>
</asp:Panel>
    -->
    </asp:Content>
