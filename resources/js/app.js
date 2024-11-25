import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

import OrcamentosList from './components/OrcamentosList';
import OrcamentoForm from './components/OrcamentoForm';

function App() {
    return (
        <Router>
            <div className="container">
                <Routes>
                    <Route path="/" element={<OrcamentosList />} />
                    <Route path="/orcamento/create" element={<OrcamentoForm />} />
                    <Route path="/orcamento/edit/:id" element={<OrcamentoForm />} />
                </Routes>
            </div>
        </Router>
    );
}

ReactDOM.render(<App />, document.getElementById('app'));
