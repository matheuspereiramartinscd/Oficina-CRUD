<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    // Exibe o formulário para criar um novo orçamento
    public function create()
    {
        return view('orcamentos.create');
    }

    // Armazena o novo orçamento no banco de dados
    public function store(Request $request)
    {
        // Valida os dados enviados pelo formulário
        $validated = $request->validate([
            'cliente' => 'required|string|max:255',
            'vendedor' => 'required|string|max:255',
            'valor_orcado' => 'required|numeric',
            'data_hora' => 'required|date',
        ]);

        // Cria um novo orçamento no banco
        Orcamento::create([
            'cliente' => $validated['cliente'],
            'vendedor' => $validated['vendedor'],
            'valor_orcado' => $validated['valor_orcado'],
            'data_hora' => $validated['data_hora'],
        ]);

        // Redireciona para a lista de orçamentos com uma mensagem de sucesso
        return redirect()->route('orcamentos.index')->with('success', 'Orçamento criado com sucesso!');
    }

    // Exibe a lista de orçamentos
    public function index(Request $request)
    {
        $query = Orcamento::query();

        // Filtros de pesquisa por cliente e vendedor
        if ($request->has('cliente')) {
            $query->where('cliente', 'like', '%' . $request->input('cliente') . '%');
        }

        if ($request->has('vendedor')) {
            $query->where('vendedor', 'like', '%' . $request->input('vendedor') . '%');
        }

        // Filtro por data
        if ($request->has('data_inicial') && $request->has('data_final')) {
            $query->whereBetween('data_hora', [$request->input('data_inicial'), $request->input('data_final')]);
        }

        // Obtém a lista de orçamentos paginada
        $orcamentos = $query->orderBy('data_hora', 'desc')->paginate(10);

        // Retorna a view com a lista de orçamentos
        return view('orcamentos.index', compact('orcamentos'));
    }

    // Exibe o formulário para editar um orçamento
    public function edit($id)
    {
        $orcamento = Orcamento::find($id);
        if (!$orcamento) {
            return redirect()->route('orcamentos.index')->with('error', 'Orçamento não encontrado!');
        }

        return view('orcamentos.edit', compact('orcamento'));
    }

    // Atualiza um orçamento existente no banco de dados
    public function update(Request $request, $id)
    {
        $orcamento = Orcamento::find($id);
        if (!$orcamento) {
            return redirect()->route('orcamentos.index')->with('error', 'Orçamento não encontrado!');
        }

        // Validação dos dados enviados pelo formulário
        $validated = $request->validate([
            'cliente' => 'required|string|max:255',
            'vendedor' => 'required|string|max:255',
            'valor_orcado' => 'required|numeric',
            'data_hora' => 'required|date',
        ]);

        // Atualiza o orçamento
        $orcamento->update($validated);

        // Redireciona para a lista de orçamentos com uma mensagem de sucesso
        return redirect()->route('orcamentos.index')->with('success', 'Orçamento atualizado com sucesso!');
    }

    // Exclui um orçamento do banco de dados
    public function destroy($id)
    {
        $orcamento = Orcamento::find($id);
        if (!$orcamento) {
            return redirect()->route('orcamentos.index')->with('error', 'Orçamento não encontrado!');
        }

        $orcamento->delete();
        return redirect()->route('orcamentos.index')->with('success', 'Orçamento excluído com sucesso!');
    }
}
