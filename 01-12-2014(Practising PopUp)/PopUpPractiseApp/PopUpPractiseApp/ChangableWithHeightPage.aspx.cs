﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace PopUpPractiseApp
{
    public partial class ChangableWithHeightPage : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void SmallContent_Click(object sender, EventArgs e)
        {
            MultiView1.ActiveViewIndex = 0;
        }

        protected void Button3_Click(object sender, EventArgs e)
        {
            MultiView1.ActiveViewIndex = 1;
        }
    }
}