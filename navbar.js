*
 * Open dropdowns on hover instead of click.
 */
@media (min-width: 768px) {
  .dropdown:hover {
    background: #262626;
  }
  .dropdown:hover > .dropdown-menu {
    display: block;
    
  }
}

/*
 * The following is needed since the dropdowns are <div> elements instead
 * of <a> elements
 */
 
.nav > li > div {
  position: relative;
  display: block;
  padding: 10px 15px;
  cursor: default;
}
.navbar-nav > li > div {
  padding-top: 15px;
  padding-bottom: 15px;
  line-height: 20px;
}
.navbar-default .navbar-nav > li > div {
  color: rgb(119, 119, 119);
}
.navbar-collapse.collapse {
  display: none;
}
.dropdown-open {
  background: #262626;
}
<style type="text/css">


