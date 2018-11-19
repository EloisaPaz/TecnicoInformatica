/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.util.ArrayList;

/**
 *
 * @author Eloisa / Filipe Alves
 * @since 08/04/ 2017 - 12:53
 * @version 1.0
 */
public class FilmeVO {
    private long idFilme; 
    private String nomefilme;
    private String diretorfilme;
    private int anofilme;
    private String generofilme;
    private String positivofilme;
    private String negativofilme;
    private String mediafilme;

    public FilmeVO() {
    }

    public FilmeVO(long idFilme, String nomefilme, String diretorfilme, int anofilme, String generofilme, String positivofilme, String negativofilme, String mediafilme) {
        this.idFilme = idFilme;
        this.nomefilme = nomefilme;
        this.diretorfilme = diretorfilme;
        this.anofilme = anofilme;
        this.generofilme = generofilme;
        this.positivofilme = positivofilme;
        this.negativofilme = negativofilme;
        this.mediafilme = mediafilme;
    }

    public long getIdFilme() {
        return idFilme;
    }

    public void setIdFilme(long idFilme) {
        this.idFilme = idFilme;
    }

    public String getNomefilme() {
        return nomefilme;
    }

    public void setNomefilme(String nomefilme) {
        this.nomefilme = nomefilme;
    }

    public String getDiretorfilme() {
        return diretorfilme;
    }

    public void setDiretorfilme(String diretorfilme) {
        this.diretorfilme = diretorfilme;
    }

    public int getAnofilme() {
        return anofilme;
    }

    public void setAnofilme(int anofilme) {
        this.anofilme = anofilme;
    }

    public String getGenerofilme() {
        return generofilme;
    }

    public void setGenerofilme(String generofilme) {
        this.generofilme = generofilme;
    }

    public String getPositivofilme() {
        return positivofilme;
    }

    public void setPositivofilme(String positivofilme) {
        this.positivofilme = positivofilme;
    }

    public String getNegativofilme() {
        return negativofilme;
    }

    public void setNegativofilme(String negativofilme) {
        this.negativofilme = negativofilme;
    }

    public String getMediafilme() {
        return mediafilme;
    }

    public void setMediafilme(String mediafilme) {
        this.mediafilme = mediafilme;
    }

    @Override
    public String toString() {
        return "";
    }
    
}//fecha classe
