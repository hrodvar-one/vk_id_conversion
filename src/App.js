import './styles/index.css';
import MyButton from "./components/UI/button/MyButton";
import '../src/styles/App.css';
import MyInput from "./components/UI/input/MyInput";
import ConnectSqlite from "./php/connect_sqlite.php";

function App() {

    return (
        <div className="App">
            <form>
                <h1>Введите ссылку на страницу или группу ВК</h1>
                <MyInput></MyInput>
                <MyButton>Определить ID</MyButton>
            </form>
        </div>
    );
}

export default App;
