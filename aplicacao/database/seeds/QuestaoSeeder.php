<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$curso = App\Curso::where('nome', 'Computação')->first();
        //$curso = App\Curso::where('nome', 'Sistemas de Informação')->first();
        $curso = App\Curso::where('nome', 'Ciência da Computação')->first();
        $disciplina = App\Disciplina::where('nome', 'Redes')->where('curso_id',$curso->id)->first();
        DB::table('questoes')->insert(['enunciado' => 'A padronização estabelecida no modelo de referência OSI possibilita a transmissão de dados entre sistemas distintos, independentemente da linguagem de programação em que foram desenvolvidos. Sobre as camadas desse modelo e os seus protocolos de rede, é CORRETO afirmar que','a' =>'são os serviços da camada de sessão que possibilitam um browser manter uma conexão ativa com um servidor de webmail, mesmo após uma breve interrupção na comunicação de rede entre eles.','b'=>'a camada física é a responsável por estabelecer a rota de cada pacote entre o emissor e o receptor. Ela implementa o protocolo TCP, responsável por garantir que os dados não sejam perdidos antes de alcançar o destinatário.','c'=>'os protocolos UDP e IP são implementados pela camada de transporte, encarregada de dividir cada pacote recebido da rede em caracteres alfanuméricos, informando-os um a um diretamente para a camada de aplicação.','d'=>'na camada de apresentação, podem ser encontrados os protocolos FTP e LAN, responsáveis por permitir que arquivos sejam baixados através de navegadores Web e que redes domésticas possam ser estabelecidas, respectivamente.','e'=>'para assegurar que o pacote chegará ao destinatário, o protocolo TCP se utiliza dos protocolos confiáveis das camadas inferiores para encaminhar suas mensagens, são eles: UDP, IP e Ethernet.','correta'=>'a','ativo'=>'1','disciplina_id' => $disciplina->id,'curso_id' => $curso->id]);
        DB::table('questoes')->insert(['enunciado' => 'Com relação ao protocolo ARP (Address Resolution Protocol), assinale a alternativa correta.','a' =>'É um protocolo ineficaz que caiu em desuso em redes Ethernet com IPv4.','b'=>'É utilizado para mapear um endereço de rede (por exemplo, um endereço IPv4) a um endereço físico (endereço MAC).','c'=>'É exclusivo do IPv6 e opcional no IPv4.','d'=>'Esse protocolo foi substituído pelo DHCP - Dynamic Host Configuration Protocol.','e'=>'Esse protocolo foi substituído pelo RARP - Reverse Address Resolution Protocol.','correta'=>'b','ativo'=>'1','disciplina_id' => $disciplina->id,'curso_id' => $curso->id]);
//        DB::table('questoes')->insert(['enunciado' => 'XXX','a' =>'XXX','b'=>'XXX','c'=>'XXX','d'=>'XXX','e'=>'XXX','correta'=>'a','ativo'=>'1','disciplina_id' => $disciplina->id,'curso_id' => $curso->id]);

        /*
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
*/
    }
}
