import "./Navbar.css";
import oaLogo from "../assets/oa-logo.png";

export const Navbar = () => {
    return (
        <div className="container-nav">
            <nav>
                <span className="nav-toggle" id="js-nav-toggle">
                    <i className="fas fa-bars"></i>
                </span>
                <div className="logo">
                    <img src={oaLogo} />
                </div>
                <ul id="js-menu">
                    <li>About OA</li>
                    <li>About SP</li>
                    <li>Login</li>
                </ul>
            </nav>
        </div>
    );
};
