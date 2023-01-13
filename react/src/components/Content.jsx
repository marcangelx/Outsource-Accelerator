import "./Content.css";
import ContentImage from "../assets/photo.jpg";
import { Navbar } from "./Navbar";
import { Hamburger } from "./Hamburger";
import { Main } from "./Main";

export const Content = () => {
    return (
        <div className="content-wrapper">
            <div className="content-leftside">
                <Navbar />
                <Hamburger />
                <Main />
            </div>

            <div
                className="content-rightside"
                style={{ backgroundImage: `url(${ContentImage})` }}
            ></div>
        </div>
    );
};
