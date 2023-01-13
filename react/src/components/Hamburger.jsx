import "./Hamburger.css";
import oaLogo from "../assets/oa-logo.png";
import { useState } from "react";
export const Hamburger = () => {
    const [displayStyle, setDisplayStyle] = useState(false);
    const onShowMenu = (e) => {
        e.preventDefault();
        setDisplayStyle(!displayStyle);
    };
    return (
        <>
            <div className="mobile-menu">
                <a href="#home" className="company-logo">
                    <img src={oaLogo} />
                </a>
                <div
                    id="myLinks"
                    style={{ display: displayStyle ? "block" : "none" }}
                >
                    <a href="#news">
                        About OA <i>▼</i>
                    </a>
                    <a href="#contact">
                        About SP <i>▼</i>
                    </a>
                    <a href="#about">
                        About <i>▼</i>
                    </a>
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
