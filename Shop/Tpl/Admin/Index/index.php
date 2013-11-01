
<!-- Sidebar begins -->
<div class="sidebar">
    <div class="mainNav">
        
        {$id}
        <!-- Responsive nav -->
        <div class="altNav">
            <div class="userSearch">
                <form action="">
                    <input type="text" placeholder="search..." name="userSearch" />
                    <input type="submit" value="" />
                </form>
            </div>
            
            <!-- User nav -->
            <ul class="userNav">
                <li><a href="#" title="" class="profile"></a></li>
                <li><a href="#" title="" class="messages"></a></li>
                <li><a href="#" title="" class="settings"></a></li>
                <li><a href="#" title="" class="logout"></a></li>
            </ul>
        </div>
        
        <!-- Main nav -->
        <ul class="nav">
            <li><a href="index.html" title=""><span>Dashboard</span></a></li>
            <li><a href="ui.html" title=""><span>UI elements</span></a>               
            </li>
            <li><a href="forms.html" title=""><span>Forms stuff</span></a>           
            </li>
            <li><a href="messages.html" title=""><span>Messages</span></a></li>
            <li><a href="statistics.html" title=""><span>Statistics</span></a></li>
            <li><a href="tables.html" title="" class="active"><span>Tables</span></a>
              
            </li>
           
        </ul>
    </div>
    
    <!-- Secondary nav -->
    <div class="secNav">
        <div class="secWrapper">
        
            <!-- Sidebar dropdown -->
            <ul class="fulldd">
                <li class="has">
                    <a title="">
                        <span class="icos-money3"></span>
                        Invoices
                        <span><img src="images/elements/control/hasddArrow.png" alt="" /></span>
                    </a>
                    <ul>
                        <li><a href="#" title=""><span class="icos-add"></span>New invoice</a></li>
                        <li><a href="#" title=""><span class="icos-archive"></span>History</a></li>
                        <li><a href="#" title=""><span class="icos-printer"></span>Print invoices</a></li>
                    </ul>
                </li>
            </ul>
            
            <div class="divider"><span></span></div>
            
            <!-- Sidebar subnav -->
            <ul class="subNav">
                <li><a href="tables.html" title="" class="this"><span class="icos-frames"></span>Standard tables</a></li>
                <li><a href="tables_dynamic.html" title=""><span class="icos-refresh"></span>Dynamic table</a></li>
                <li><a href="tables_control.html" title=""><span class="icos-bullseye"></span>Tables with control</a></li>
                <li><a href="tables_sortable.html" title=""><span class="icos-transfer"></span>Sortable and resizable</a></li>
            </ul>
            
            <div class="divider"><span></span></div>
        
        	<!-- Sidebar big buttons -->
            <div class="sidePad">
                <a href="#" title="" class="sideB bBlue">Add new session</a>
                <a href="#" title="" class="sideB bRed mt10">Add new session</a>
                <a href="#" title="" class="sideB bGreen mt10">Add new session</a>
                <a href="#" title="" class="sideB bGreyish mt10">Add new session</a>
                <a href="#" title="" class="sideB bBrown mt10">Add new session</a>
            </div>
        
            <div class="divider"><span></span></div>
            
          
    		<!-- Sidebar buttons -->
            <div class="fluid sideWidget">
                <div class="grid6"><input type="submit" class="buttonS bRed" value="Cancel" /></div>
                <div class="grid6"><input type="submit" class="buttonS bGreen" value="Submit" /></div>
            </div>
            
            <div class="divider"><span></span></div>
                    
       </div> 
       <div class="clear"></div>
   </div>
</div>
<!-- Sidebar ends -->    
	
    
<!-- Content begins -->
<div class="content">
   
    <!-- Breadcrumbs line -->
    <div class="breadLine">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="tables.html">Tables</a>
                    <ul>
                        <li><a href="tables_dynamic.html" title="">Dynamic table</a></li>
                        <li><a href="tables_control.html" title="">Tables with control</a></li>
                        <li><a href="tables_sortable.html" title="">Sortable and resizable</a></li>
                    </ul>
                </li>
                <li class="current"><a href="tables.html" title="">Standard tables</a></li>
            </ul>
        </div>
        
        <div class="breadLinks">
            <ul>
                <li><a href="#" title=""><i class="icos-list"></i><span>Orders</span> <strong>(+58)</strong></a></li>
                <li><a href="#" title=""><i class="icos-check"></i><span>Tasks</span> <strong>(+12)</strong></a></li>
                <li class="has">
                    <a title="">
                        <i class="icos-money3"></i>
                        <span>Invoices</span>
                        <span><img src="images/elements/control/hasddArrow.png" alt="" /></span>
                    </a>
                    <ul>
                        <li><a href="#" title=""><span class="icos-add"></span>New invoice</a></li>
                        <li><a href="#" title=""><span class="icos-archive"></span>History</a></li>
                        <li><a href="#" title=""><span class="icos-printer"></span>Print invoices</a></li>
                    </ul>
                </li>
            </ul>
             <div class="clear"></div>
        </div>
    </div>
    
    <!-- Main content -->
    <div class="wrapper">
        
		<!-- Standard table -->
        <div class="widget">
            <div class="whead"><h6>Static table</h6><div class="clear"></div></div>
            
            <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                <thead>
                    <tr>
                        <td>Column name</td>
                        <td>Column name</td>
                        <td>Column name</td>
                        <td>Column name</td>
                        <td>Column name</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                    <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                     <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                     <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                     <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                     <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                     <tr>
                        <td>Row 1</td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td>Row 4</td>
                        <td>Row 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    

    	
       <div class="divider"><span></span></div>

  </div>
  <!-- Main content ends -->
    
</div>
<!-- Content ends -->    
<div class="clear"></div>