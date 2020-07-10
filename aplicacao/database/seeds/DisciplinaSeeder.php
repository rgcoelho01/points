<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = App\Curso::where('nome', 'Computação')->first();
        DB::table('disciplinas')->insert(['nome' => 'Arquitetura de Computadores','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Comunidades Virtuais de Aprendizagem','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Didática','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Educação, Trabalho e Sociedade','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Fundamentos da Educação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Fundamentos de Programação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Introdução ao Ensino à Distância','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Laboratórios Computacionais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Lógica para Computação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Matemática Discreta','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Tecnologias Assistivas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Cálculo','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Ensino à Distância','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Estrutura de Dados','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Introdução à Teoria da Computação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Legislação em Informática','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Prática de Ensino de Computação I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Prática de Ensino de Computação II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Banco de Dados','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Libras','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Metodologia Científica Aplicada ao Ensino','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Metodologia e Prática de Ensino','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Políticas Educacionais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Probabilidade e Estatística','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação III','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação IV','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto e Desenvolvimento de Software Educacional','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Redes de Computadores','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Operacionais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Auditoria e Segurança de Sistemas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Empreendedorismo','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Gestão da Informação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Gestão de Projetos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Inteligência Artificial Aplicada ao Ensino','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Interface Homem Máquina','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto Integrador','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Distribuídos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Tecnologias Computacionais no Ensino I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Tecnologias Computacionais no Ensino II','curso_id' => $curso->id]);

        $curso = App\Curso::where('nome', 'Sistemas de Informação')->first();
        DB::table('disciplinas')->insert(['nome' => 'Arquitetura de Computadores','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Didática Geral','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Fundamentos de Sistemas de Informação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Lógica Matemática','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Matemática Discreta','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto Articulador I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Psicologia da Educação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Relações Humanas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Teoria Geral dos Sistemas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Banco de Dados I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Cálculo','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Estrutura de Dados','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Informática Aplicada à Educação e Hipermídia','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Informática e Sociedade','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Política Educacional: Estrutura e Funcionamento da Educação Básica','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Probabilidade e Estatística','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto Articulador II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Redes I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Administração','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Banco de Dados II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Computação e Algoritmos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Economia e Finanças','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Ensino à Distância','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Metodologia e Prática do Ensino Fundamental e Médio','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação III','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto Articulador III','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Redes II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Operacionais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Auditoria e Segurança de Sistemas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Contabilidade e Custos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Empreendedorismo','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software III','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Gerência de Projetos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Gestão da Informação I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Inteligência Artificial','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Metodologia Científica','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Distribuídos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Gestão da Informação II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Interface Homem Máquina','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Legislação em Informática','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Tópicos Avançados em Computação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Tópicos Avançados em Sistemas de Informação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Libras','curso_id' => $curso->id]);

        $curso = App\Curso::where('nome', 'Ciência da Computação')->first();
        DB::table('disciplinas')->insert(['nome' => 'Administração','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Cálculo e Geometria Analítica I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Computadores e Sociedade','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Comunicação e Expressão','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Introdução a Ciência da Computação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Matemática Discreta e Lógica Matemática','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Digitais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sociologia','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Teoria e Prática dos Sistemas de Informação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Álgebra Linear','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Arquitetura de Computadores','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Cálculo e Geometria Analítica II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software I','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Estrutura de Dados','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Física','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Metodologia de Pesquisa','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Probabilidade e Estatística','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Programação II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Teoria da Computação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Banco de Dados','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Compiladores','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software II','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Inteligência Artificial','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Linguagens de Programação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Projeto e Análise de Algoritmos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Redes','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Operacionais','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Computação Gráfica','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Computação Simbólica e Numérica','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Empreendedorismo','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Engenharia de Software III','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Informática e Educação','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Interface Homem Máquina','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Prática e Gerenciamento de Projetos','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Segurança e Auditoria de Sistemas','curso_id' => $curso->id]);
        DB::table('disciplinas')->insert(['nome' => 'Sistemas Distribuídos','curso_id' => $curso->id]);
        
    }
}
