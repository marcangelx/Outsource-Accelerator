import "./Navbar.css";
import Logo from "../assets/oa-logo.png";

export const Navbar = () => {
    return (
        <div className="container-navbar">
            <nav>
                <span className="nav-toggle" id="js-nav-toggle">
                    <i className="fas fa-bars"></i>
                </span>
                <div className="company-logo">
                    <img src={Logo} />
                </div>
                <ul className="navbar-menu">
                    <li>About OA</li>
                    <li>About SP</li>
                    <li>Login</li>
                </ul>
            </nav>
        </div>
    );
};
