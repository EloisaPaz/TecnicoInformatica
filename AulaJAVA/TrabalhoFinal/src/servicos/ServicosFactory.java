/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servicos;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class ServicosFactory {
    private static final FilmeServicos FS = new FilmeServicos();
    
    public static FilmeServicos getFilmeServicos(){
        return FS;
    }
    
    private static final SerieServicos SS = new SerieServicos();
    
    public static SerieServicos getSerieServicos(){
        return SS;
    }
}//fecha classe
