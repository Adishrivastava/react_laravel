import logo from './logo.svg';
import './App.css';

import { useEffect, useState } from 'react';

function App() {
	const [text, setText] = useState('');

	useEffect(() => {
		fetch('http://localhost:8000/api/text')
			.then((res) => res.json())
			.then((json) => {
				setText(json.students);
			});
	}, []);

	return (
		<div className="App">
			<header className="App-header">
				<img src={logo} className="App-logo" alt="logo" />

				{text}
			</header>
		</div>
	);
}

export default App;
