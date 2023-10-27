export class GetOperationCollecteRequestToPrint {
    StartDate?: Date;
    FinishDate?: Date;
    ClientName?: string;
    ClientNumber?: string;
    BranchCode?: string;
    Type?: string;
    Cdedat?: string;

    constructor(obj:GetOperationCollecteRequest)
    {
        this.StartDate?=obj.DateDebut;
        this.FinishDate?=obj.DateFin;
        this.ClientName?=obj.NumCol;
        this.ClientNumber?=obj.NumCli;
        this.BranchCode?=obj.Codage;
        this.Type?=obj.typ;
        this.Cdedat?=obj.Cdedat;
    }
}

export interface GetOperationCollecteRequest {
    DateDebut?: Date;
    DateFin?: Date;
    NumCol?: string;
    NumCli?: string;
    Codage?: string;
    typ?: string;
    Cdedat?: string;
}