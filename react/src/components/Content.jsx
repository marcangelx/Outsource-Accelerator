import "./Content.css";
import ContentImage from "../assets/photo.jpg";
import { Navbar } from "./Navbar";
import { Hamburger } from "./Hamburger";
export const Content = () => {
    return (
        <div className="container-image">
            <div className="content">
                <Navbar />
                <Hamburger />
            </div>
            <div
                className="image"
                style={{ backgroundImage: `url(${ContentImage})` }}
            ></div>
        </div>
    );
};
