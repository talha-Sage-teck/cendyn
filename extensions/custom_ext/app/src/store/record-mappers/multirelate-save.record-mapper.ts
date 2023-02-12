import {Record, RecordMapper} from 'common';
import {Injectable} from '@angular/core';

@Injectable({
    providedIn: 'root'
})
export class MultiRelateSaveRecordMapper implements RecordMapper {

    getKey(): string {
        return 'multirelate';
    }

    map(record: Record): void {

        if (!record.fields || !Object.keys(record.fields).length) {
            return;
        }

        Object.keys(record.fields).forEach(fieldName => {
            const field = record.fields[fieldName];

            const type = field.type || '';
            const source = field.definition.source || '';
            const rname = field.definition.rname || 'name';
            const idName = field.definition.id_name || '';

            if (type === 'multirelate' && source === 'non-db' && idName === fieldName) {
                record.attributes[fieldName] = field.value;
                return;
            }

            if (type === 'multirelate' && source === 'non-db' && rname !== '' && field.valueObjectArray) {
                var ids = [];
                field.valueObjectArray.forEach((obj) => {
                    ids.push(obj.id);
                });
                record.attributes[fieldName] = field.valueObjectArray;
                record.attributes[idName] = ids.join(', ');
                return;
            }
        });
    }
}
