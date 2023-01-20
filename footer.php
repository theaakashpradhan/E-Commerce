<style type="text/css">
  

  .row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;

   
}
.footer-col{
   width: 25%;
   padding:2px 0px;
}
.footer-col h4{
  font-size: 15px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 0px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
 
  height: 1px;
  box-sizing: border-box;
  width: 10px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 0px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 2px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 10px;
  width: 20px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 10px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 0px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
</style>


<br><br>
<br><br>
<br><br>


<footer class="footer">
        <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
       
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
           
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          
          </div>
        </div>
      </div>
        </div>
          <div class="copy" align="center" >
             
                   <u> Copyright &#169; 2020-21 Gallery. All Rights Reserved.20200821.1-release</u>
              </div>
            
    </footer>