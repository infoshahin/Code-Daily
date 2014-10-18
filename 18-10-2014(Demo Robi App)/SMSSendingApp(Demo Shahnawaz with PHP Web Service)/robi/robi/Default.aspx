<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.master" AutoEventWireup="true"
    CodeBehind="Default.aspx.cs" Inherits="robi._Default" %>

<asp:Content ID="HeaderContent" runat="server" ContentPlaceHolderID="HeadContent">
</asp:Content>
<asp:Content ID="BodyContent" runat="server" ContentPlaceHolderID="MainContent">
    <p>
    Fill out the contact form below and you will receive a response within one
    business day. You may also send email directly to
    <a href="mailto:info@technologytoolbox.com">info@technologytoolbox.com</a>.</p>
  <fieldset>
      <asp:TextBox ID="username" runat="server"></asp:TextBox>
      <br />
      <br />
      <asp:TextBox ID="password" runat="server"></asp:TextBox>
      <br />
      <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
      <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
  </fieldset>
  <div class="button-panel">
      <asp:Button ID="Button1" runat="server" onclick="Button1_Click" Text="Button" />
  </div>
</asp:Content>
