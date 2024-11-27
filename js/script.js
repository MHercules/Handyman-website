let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

//React component to drop down menu that's faulty
/* 
<script type="text/babel">
class GetMenu extends React.Component
{
    constructor(props)
    {
        super(props)
        this.state = {isOpen: false}
        this.toggleDropdown = this.toggleDropdown.bind(this)
    }

    toggleDropdown()
    {
        this.setState(prevState => ({isOpen: !prevState.isOpen}))
    }

    render()
    {
        return(
            <div className="dropdown">
                <button className="dropbtn"></button>
                <div className="dropdown-content">
                    <a href="#home">Home<i class="fa-solid fa-house"></i></a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#appointment">Appointment</a>
                    <a href="#review">Reviews</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        );
    }
}

doRender(<GetMenu />, ("menu-btn"))

function doRender(elem, dest)
{
    ReactDOM.render(elem, document.getElementById(dest))
}
</script>
*/