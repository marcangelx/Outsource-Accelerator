import "./Hamburger.css";
import oaLogo from "../assets/oa-logo.png";
import { useState } from "react";
export const Hamburger = () => {
    const [displayStyle, setDisplayStyle] = useState(false);
    const onShowMenu = (e) => {
        e.preventDefault();
        setDisplayStyle(!displayStyle);
        console.log(displayStyle);
    };
    return (
        <>
            <div className="topnav">
                <a href="#home" className="active logo">
                    <img src={oaLogo} />
                </a>
                <div
                    id="myLinks"
                    style={{ display: displayStyle ? "block" : "none" }}
                >
                    <a href="#news">About OA</a>
                    <a href="#contact">About SP</a>
                    <a href="#about">About</a>
                </div>
                <a
                    href=""
                    className="icon-burger"
                    onClick={(e) => {
                        onShowMenu(e);
                    }}
                >
                    ☰
                </a>
            </div>
        </>
    );
};
