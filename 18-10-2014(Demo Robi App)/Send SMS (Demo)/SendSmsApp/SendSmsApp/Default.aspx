<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.master" AutoEventWireup="true"
    CodeBehind="Default.aspx.cs" Inherits="SendSmsApp._Default" %>

<asp:Content ID="HeaderContent" runat="server" ContentPlaceHolderID="HeadContent">
</asp:Content>
<asp:Content ID="BodyContent" runat="server" ContentPlaceHolderID="MainContent">
    HTTPGET<br />
    <br />
    <asp:Label ID="Label3" runat="server" Text="User Name"></asp:Label>
&nbsp;<asp:TextBox ID="userNameTextBoxGet" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label4" runat="server" Text="Password"></asp:Label>
&nbsp;<asp:TextBox ID="passwordTextBoxGet" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label5" runat="server" Text="From"></asp:Label>
&nbsp;&nbsp;&nbsp;
    <asp:TextBox ID="fromTextBoxGet" runat="server"></asp:TextBox>
    <br />
    <br />
    <br />
    <asp:Label ID="msisdnLabel" runat="server" Text="To"></asp:Label>
&nbsp;
    <asp:TextBox ID="toTextBoxGet" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label2" runat="server" Text="Text"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:TextBox ID="textMsgTextBoxGet" runat="server" Font-Size="Small" 
        TextMode="MultiLine"></asp:TextBox>
    <br />
    <br />
    <asp:Button ID="sendMessageButtonGet" runat="server" Text="Send Message" />
    <br />
    <br />
    <br />
    HTTPPOST<br />
    <br />
    <asp:Label ID="Label6" runat="server" Text="User Name"></asp:Label>
&nbsp;<asp:TextBox ID="userNameTextBoxPost" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label7" runat="server" Text="Password"></asp:Label>
&nbsp;<asp:TextBox ID="passwordTextBoxPost" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label8" runat="server" Text="From"></asp:Label>
&nbsp;<asp:TextBox ID="fromTextBoxPost" runat="server"></asp:TextBox>
    <br />
    <br />
    <br />
    <asp:Label ID="msisdnLabel0" runat="server" Text="To"></asp:Label>
&nbsp;
    <asp:TextBox ID="toTextBoxPost" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label9" runat="server" Text="Text"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:TextBox ID="textMsgTextBoxPost" runat="server" Font-Size="Small" 
        TextMode="MultiLine"></asp:TextBox>
    <br />
    <br />
    <asp:Button ID="sendMessageButtonPost" runat="server" Text="Send Message" />
    <br />
    <br />
    <br />
    HTTPSOAP<br />
    <br />
    <asp:Label ID="Label10" runat="server" Text="User Name"></asp:Label>
&nbsp;<asp:TextBox ID="userNameTextBoxSoap" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label11" runat="server" Text="Password"></asp:Label>
&nbsp;<asp:TextBox ID="passwordTextBoxSoap" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label12" runat="server" Text="From"></asp:Label>
&nbsp;<asp:TextBox ID="fromTextBoxSoap" runat="server"></asp:TextBox>
    <br />
    <br />
    <br />
    <asp:Label ID="msisdnLabel1" runat="server" Text="To"></asp:Label>
&nbsp;
    <asp:TextBox ID="toTextBoxSoap" runat="server"></asp:TextBox>
    <br />
    <br />
    <asp:Label ID="Label13" runat="server" Text="Text"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:TextBox ID="textMsgTextBoxSoap" runat="server" Font-Size="Small" 
        TextMode="MultiLine"></asp:TextBox>
    <br />
    <br />
    <asp:Button ID="sendMessageButtonSoap" runat="server" Text="Send Message" />
    <br />
</asp:Content>
