import { useState } from "react";
import { Content } from "./components/Content";
import "./index.css";
function App() {
    const [count, setCount] = useState(0);

    return (
        <div className="App">
            <Content />
        </div>
    );
}

export default App;
