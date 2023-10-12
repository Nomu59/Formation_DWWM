import {Routes, Route} from "react-router-dom";
import Home from "./pages/Home";
import Services from "./pages/Services";
import Development from "./pages/Services/Development";
import Marketing from "./pages/Services/Marketing";
import Profile from "./pages/Profile";
import Navbar from "./components/Navbar";
import Login from "./pages/Login";
import ComposantEnfant from "./components/ComposantEnfant";
import ComposantEvent from "./components/ComposantEvent";
import ComposantInput from "./components/ComposantInput";
import ComposantParent from "./components/ComposantParent";
import Garage from "./components/Garage";
import Hero from "./components/Hero";
import Ligue from "./components/Ligue";
import TestImage from "./components/TestImage";
import Voiture from "./components/Voiture";
import Flags from "./pages/Flags";
import FlagDescription from "./pages/FlagDescription";

function App() {
    return (
        <div className="App">
            <Navbar/>
            <Routes>
                <Route path="/" element={<Home/>} />
                <Route path="/services" element={<Services/>}>
                    <Route path="/services/development" element={<Development/>} />
                    <Route path="/services/marketing" element={<Marketing/>} />
                </Route>
                <Route path="/profile/:id" element={<Profile/>} />
                <Route path="/login" element={<Login/>} />
                <Route path="/composant-enfant" element={<ComposantEnfant/>} />
                <Route path="/composant-event" element={<ComposantEvent/>} />
                <Route path="/composant-input" element={<ComposantInput/>} />
                <Route path="/composant-parent" element={<ComposantParent/>} />
                <Route path="/garage" element={<Garage/>} />
                <Route path="/hero" element={<Hero/>} />
                <Route path="/ligue" element={<Ligue/>} />
                <Route path="/test-image" element={<TestImage/>} />
                <Route path="/voiture" element={<Voiture/>} />
                <Route path="/flags" element={<Flags/>} />
                <Route path="/flags/:id" element={<FlagDescription/>} />
            </Routes>
        </div>
    )
}

export default App